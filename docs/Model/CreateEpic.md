# CreateEpic

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | The Epic&#x27;s description. | [optional] 
**labels** | [**\Timetoreply\Shortcut\Model\CreateLabelParams[]**](CreateLabelParams.md) | An array of Labels attached to the Epic. | [optional] 
**completedAtOverride** | [**\DateTime**](\DateTime.md) | A manual override for the time/date the Epic was completed. | [optional] 
**name** | **string** | The Epic&#x27;s name. | 
**plannedStartDate** | [**\DateTime**](\DateTime.md) | The Epic&#x27;s planned start date. | [optional] 
**state** | **string** | &#x60;Deprecated&#x60; The Epic&#x27;s state (to do, in progress, or done); will be ignored when &#x60;epic_state_id&#x60; is set. | [optional] 
**milestoneId** | **int** | The ID of the Milestone this Epic is related to. | [optional] 
**requestedById** | **string** | The ID of the member that requested the epic. | [optional] 
**epicStateId** | **int** | The ID of the Epic State. | [optional] 
**startedAtOverride** | [**\DateTime**](\DateTime.md) | A manual override for the time/date the Epic was started. | [optional] 
**groupId** | **string** | The ID of the group to associate with the epic. | [optional] 
**updatedAt** | [**\DateTime**](\DateTime.md) | Defaults to the time/date it is created but can be set to reflect another date. | [optional] 
**followerIds** | **string[]** | An array of UUIDs for any Members you want to add as Followers on this new Epic. | [optional] 
**ownerIds** | **string[]** | An array of UUIDs for any members you want to add as Owners on this new Epic. | [optional] 
**externalId** | **string** | This field can be set to another unique ID. In the case that the Epic has been imported from another tool, the ID in the other tool can be indicated here. | [optional] 
**deadline** | [**\DateTime**](\DateTime.md) | The Epic&#x27;s deadline. | [optional] 
**createdAt** | [**\DateTime**](\DateTime.md) | Defaults to the time/date it is created but can be set to reflect another date. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

