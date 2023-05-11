# Workflow

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | A description of the workflow. | 
**entityType** | **string** | A string description of this resource. | 
**projectIds** | **double[]** | An array of IDs of projects within the Workflow. | 
**states** | [**\Timetoreply\Shortcut\Model\WorkflowState[]**](WorkflowState.md) | A map of the states in this Workflow. | 
**name** | **string** | The name of the workflow. | 
**updatedAt** | [**\DateTime**](\DateTime.md) | The date the Workflow was updated. | 
**autoAssignOwner** | **bool** | Indicates if an owner is automatically assigned when an unowned story is started. | 
**id** | **int** | The unique ID of the Workflow. | 
**teamId** | **int** | The ID of the team the workflow belongs to. | 
**createdAt** | [**\DateTime**](\DateTime.md) | The date the Workflow was created. | 
**defaultStateId** | **int** | The unique ID of the default state that new Stories are entered into. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

