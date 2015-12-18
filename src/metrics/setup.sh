
# Need to check that correct master-config file being used by openshift start
oc project openshift-infra
oc delete all --all -n openshift-infra


oc delete pod `oc get pods | grep deploy | awk '{print $1}'`
oc delete pod `oc get pods | grep metrics | awk '{print $1}'`
oc delete serviceaccount metrics-deployer

oc create -f - <<API
apiVersion: v1
kind: ServiceAccount
metadata:
  name: metrics-deployer
secrets:
- name: metrics-deployer
API

oadm policy add-role-to-user edit system:serviceaccount:openshift-infra:metrics-deployer
oadm policy add-cluster-role-to-user cluster-reader system:serviceaccount:openshift-infra:heapster

oc secrets new metrics-deployer nothing=/dev/null

oc delete template hawkular-cassandra-node-emptydir
oc delete template hawkular-cassandra-node-pv
oc delete template hawkular-heapster
oc delete template hawkular-support
oc delete template hawkular-metrics
oc delete template hawkular-cassandra-services

oc delete secrets/hawkular-metrics-certificate
oc delete secrets/heapster-secrets
oc delete secrets/hawkular-cassandra-certificate
oc delete secrets/hawkular-cassandra-secrets
oc delete secrets/hawkular-metrics-account
oc delete secrets/hawkular-metrics-secrets

oc delete service heapster
oc delete service hawkular-metrics

oc delete rc hawkular-metrics
oc delete rc heapster

oc delete service hawkular-cassandra
oc delete service hawkular-cassandra-nodes

oc delete serviceaccount hawkular
oc delete serviceaccount cassandra
oc delete serviceaccount heapster
oc delete route hawkular-metrics

oc process -f metrics.yaml -v HAWKULAR_METRICS_HOSTNAME=hawkular-metrics.example.com,USE_PERSISTENT_STORAGE=false | oc create -f -

sleep 5
oc logs -f `oc get pods | grep deploy | awk '{print $1}'`

sleep 5
systemctl restart openshift
