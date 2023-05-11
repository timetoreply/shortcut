# UpdateMilestone

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | The Milestone&#x27;s description. | [optional] 
**archived** | **bool** | A boolean indicating whether the Milestone is archived or not | [optional] 
**completedAtOverride** | [**\DateTime**](\DateTime.md) | A manual override for the time/date the Milestone was completed. | [optional] 
**name** | **string** | The name of the Milestone. | [optional] 
**state** | **string** | The workflow state that the Milestone is in. | [optional] 
**startedAtOverride** | [**\DateTime**](\DateTime.md) | A manual override for the time/date the Milestone was started. | [optional] 
**categories** | [**\Timetoreply\Shortcut\Model\CreateCategoryParams[]**](CreateCategoryParams.md) | An array of IDs of Categories attached to the Milestone. | [optional] 
**beforeId** | **int** | The ID of the Milestone we want to move this Milestone before. | [optional] 
**afterId** | **int** | The ID of the Milestone we want to move this Milestone after. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

