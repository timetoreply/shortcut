# Epic

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**appUrl** | **string** | The Shortcut application url for the Epic. | 
**description** | **string** | The Epic&#x27;s description. | 
**archived** | **bool** | True/false boolean that indicates whether the Epic is archived or not. | 
**started** | **bool** | A true/false boolean indicating if the Epic has been started. | 
**entityType** | **string** | A string description of this resource. | 
**labels** | [**\Timetoreply\Shortcut\Model\LabelSlim[]**](LabelSlim.md) | An array of Labels attached to the Epic. | 
**mentionIds** | **string[]** | Deprecated: use member_mention_ids. | 
**memberMentionIds** | **string[]** | An array of Member IDs that have been mentioned in the Epic description. | 
**associatedGroups** | [**\Timetoreply\Shortcut\Model\EpicAssociatedGroup[]**](EpicAssociatedGroup.md) | An array containing Group IDs and Group-owned story counts for the Epic&#x27;s associated groups. | 
**projectIds** | **int[]** | The IDs of Projects related to this Epic. | 
**storiesWithoutProjects** | **int** | The number of stories in this epic which are not associated with a project. | 
**completedAtOverride** | [**\DateTime**](\DateTime.md) | A manual override for the time/date the Epic was completed. | 
**productboardPluginId** | **string** | The ID of the associated productboard integration. | 
**startedAt** | [**\DateTime**](\DateTime.md) | The time/date the Epic was started. | 
**completedAt** | [**\DateTime**](\DateTime.md) | The time/date the Epic was completed. | 
**name** | **string** | The name of the Epic. | 
**globalId** | **string** |  | 
**completed** | **bool** | A true/false boolean indicating if the Epic has been completed. | 
**comments** | [**\Timetoreply\Shortcut\Model\ThreadedComment[]**](ThreadedComment.md) | A nested array of threaded comments. | 
**productboardUrl** | **string** | The URL of the associated productboard feature. | 
**plannedStartDate** | [**\DateTime**](\DateTime.md) | The Epic&#x27;s planned start date. | 
**state** | **string** | &#x60;Deprecated&#x60; The workflow state that the Epic is in. | 
**milestoneId** | **int** | The ID of the Milestone this Epic is related to. | 
**requestedById** | **string** | The ID of the Member that requested the epic. | 
**epicStateId** | **int** | The ID of the Epic State. | 
**labelIds** | **int[]** | An array of Label ids attached to the Epic. | 
**startedAtOverride** | [**\DateTime**](\DateTime.md) | A manual override for the time/date the Epic was started. | 
**groupId** | **string** |  | 
**updatedAt** | [**\DateTime**](\DateTime.md) | The time/date the Epic was updated. | 
**groupMentionIds** | **string[]** | An array of Group IDs that have been mentioned in the Epic description. | 
**productboardId** | **string** | The ID of the associated productboard feature. | 
**followerIds** | **string[]** | An array of UUIDs for any Members you want to add as Followers on this Epic. | 
**ownerIds** | **string[]** | An array of UUIDs for any members you want to add as Owners on this new Epic. | 
**externalId** | **string** | This field can be set to another unique ID. In the case that the Epic has been imported from another tool, the ID in the other tool can be indicated here. | 
**id** | **int** | The unique ID of the Epic. | 
**position** | **int** | The Epic&#x27;s relative position in the Epic workflow state. | 
**productboardName** | **string** | The name of the associated productboard feature. | 
**deadline** | [**\DateTime**](\DateTime.md) | The Epic&#x27;s deadline. | 
**stats** | [**\Timetoreply\Shortcut\Model\EpicStats**](EpicStats.md) |  | 
**createdAt** | [**\DateTime**](\DateTime.md) | The time/date the Epic was created. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

