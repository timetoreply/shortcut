# # UpdateEpic

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | The Epic&#39;s description. | [optional]
**archived** | **bool** | A true/false boolean indicating whether the Epic is in archived state. | [optional]
**labels** | [**\Timetoreply\Shortcut\Model\CreateLabelParams[]**](CreateLabelParams.md) | An array of Labels attached to the Epic. | [optional]
**completedAtOverride** | **\DateTime** | A manual override for the time/date the Epic was completed. | [optional]
**objectiveIds** | **int[]** | An array of IDs for Objectives to which this Epic is related. | [optional]
**name** | **string** | The Epic&#39;s name. | [optional]
**plannedStartDate** | **\DateTime** | The Epic&#39;s planned start date. | [optional]
**state** | **string** | &#x60;Deprecated&#x60; The Epic&#39;s state (to do, in progress, or done); will be ignored when &#x60;epic_state_id&#x60; is set. | [optional]
**milestoneId** | **int** | &#x60;Deprecated&#x60; The ID of the Milestone this Epic is related to. Use &#x60;objective_ids&#x60;. | [optional]
**requestedById** | **string** | The ID of the member that requested the epic. | [optional]
**epicStateId** | **int** | The ID of the Epic State. | [optional]
**startedAtOverride** | **\DateTime** | A manual override for the time/date the Epic was started. | [optional]
**groupId** | **string** | &#x60;Deprecated&#x60; The ID of the group to associate with the epic. Use &#x60;group_ids&#x60;. | [optional]
**followerIds** | **string[]** | An array of UUIDs for any Members you want to add as Followers on this Epic. | [optional]
**groupIds** | **string[]** | An array of UUIDS for Groups to which this Epic is related. | [optional]
**ownerIds** | **string[]** | An array of UUIDs for any members you want to add as Owners on this Epic. | [optional]
**externalId** | **string** | This field can be set to another unique ID. In the case that the Epic has been imported from another tool, the ID in the other tool can be indicated here. | [optional]
**beforeId** | **int** | The ID of the Epic we want to move this Epic before. | [optional]
**afterId** | **int** | The ID of the Epic we want to move this Epic after. | [optional]
**deadline** | **\DateTime** | The Epic&#39;s deadline. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
