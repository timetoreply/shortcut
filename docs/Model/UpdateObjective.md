# # UpdateObjective

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | The Objective&#39;s description. | [optional]
**archived** | **bool** | A boolean indicating whether the Objective is archived or not | [optional]
**completedAtOverride** | **\DateTime** | A manual override for the time/date the Objective was completed. | [optional]
**name** | **string** | The name of the Objective. | [optional]
**state** | **string** | The workflow state that the Objective is in. | [optional]
**startedAtOverride** | **\DateTime** | A manual override for the time/date the Objective was started. | [optional]
**categories** | [**\Timetoreply\Shortcut\Model\CreateCategoryParams[]**](CreateCategoryParams.md) | An array of IDs of Categories attached to the Objective. | [optional]
**beforeId** | **int** | The ID of the Objective we want to move this Objective before. | [optional]
**afterId** | **int** | The ID of the Objective we want to move this Objective after. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
