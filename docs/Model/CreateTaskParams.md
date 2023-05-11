# CreateTaskParams

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | The Task description. | 
**complete** | **bool** | True/false boolean indicating whether the Task is completed. Defaults to false. | [optional] 
**ownerIds** | **string[]** | An array of UUIDs for any members you want to add as Owners on this new Task. | [optional] 
**createdAt** | [**\DateTime**](\DateTime.md) | Defaults to the time/date the Task is created but can be set to reflect another creation time/date. | [optional] 
**updatedAt** | [**\DateTime**](\DateTime.md) | Defaults to the time/date the Task is created in Shortcut but can be set to reflect another time/date. | [optional] 
**externalId** | **string** | This field can be set to another unique ID. In the case that the Task has been imported from another tool, the ID in the other tool can be indicated here. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

