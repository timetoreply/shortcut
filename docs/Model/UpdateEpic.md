# UpdateEpic

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | The Epic&#x27;s description. | [optional] 
**archived** | **bool** | A true/false boolean indicating whether the Epic is in archived state. | [optional] 
**labels** | [**\Timetoreply\Shortcut\Model\CreateLabelParams[]**](CreateLabelParams.md) | An array of Labels attached to the Epic. | [optional] 
**completedAtOverride** | [**\DateTime**](\DateTime.md) | A manual override for the time/date the Epic was completed. | [optional] 
**name** | **string** | The Epic&#x27;s name. | [optional] 
**plannedStartDate** | [**\DateTime**](\DateTime.md) | The Epic&#x27;s planned start date. | [optional] 
**state** | **string** | &#x60;Deprecated&#x60; The Epic&#x27;s state (to do, in progress, or done); will be ignored when &#x60;epic_state_id&#x60; is set. | [optional] 
**milestoneId** | **int** | The ID of the Milestone this Epic is related to. | [optional] 
**requestedById** | **string** | The ID of the member that requested the epic. | [optional] 
**epicStateId** | **int** | The ID of the Epic State. | [optional] 
**startedAtOverride** | [**\DateTime**](\DateTime.md) | A manual override for the time/date the Epic was started. | [optional] 
**groupId** | **string** | The ID of the group to associate with the epic. | [optional] 
**followerIds** | **string[]** | An array of UUIDs for any Members you want to add as Followers on this Epic. | [optional] 
**ownerIds** | **string[]** | An array of UUIDs for any members you want to add as Owners on this Epic. | [optional] 
**beforeId** | **int** | The ID of the Epic we want to move this Epic before. | [optional] 
**afterId** | **int** | The ID of the Epic we want to move this Epic after. | [optional] 
**deadline** | [**\DateTime**](\DateTime.md) | The Epic&#x27;s deadline. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

