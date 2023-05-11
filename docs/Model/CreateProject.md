# CreateProject

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | The Project description. | [optional] 
**color** | **string** | The color you wish to use for the Project in the system. | [optional] 
**name** | **string** | The name of the Project. | 
**startTime** | [**\DateTime**](\DateTime.md) | The date at which the Project was started. | [optional] 
**updatedAt** | [**\DateTime**](\DateTime.md) | Defaults to the time/date it is created but can be set to reflect another date. | [optional] 
**followerIds** | **string[]** | An array of UUIDs for any members you want to add as Owners on this new Epic. | [optional] 
**externalId** | **string** | This field can be set to another unique ID. In the case that the Project has been imported from another tool, the ID in the other tool can be indicated here. | [optional] 
**teamId** | **int** | The ID of the team the project belongs to. | 
**iterationLength** | **int** | The number of weeks per iteration in this Project. | [optional] 
**abbreviation** | **string** | The Project abbreviation used in Story summaries. Should be kept to 3 characters at most. | [optional] 
**createdAt** | [**\DateTime**](\DateTime.md) | Defaults to the time/date it is created but can be set to reflect another date. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

