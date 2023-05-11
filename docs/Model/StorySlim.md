# StorySlim

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**appUrl** | **string** | The Shortcut application url for the Story. | 
**description** | **string** | The description of the Story. | [optional] 
**archived** | **bool** | True if the story has been archived or not. | 
**started** | **bool** | A true/false boolean indicating if the Story has been started. | 
**storyLinks** | [**\Timetoreply\Shortcut\Model\TypedStoryLink[]**](TypedStoryLink.md) | An array of story links attached to the Story. | 
**entityType** | **string** | A string description of this resource. | 
**labels** | [**\Timetoreply\Shortcut\Model\LabelSlim[]**](LabelSlim.md) | An array of labels attached to the story. | 
**taskIds** | **int[]** | An array of IDs of Tasks attached to the story. | 
**mentionIds** | **string[]** | Deprecated: use member_mention_ids. | 
**syncedItem** | [**\Timetoreply\Shortcut\Model\SyncedItem**](SyncedItem.md) |  | [optional] 
**memberMentionIds** | **string[]** | An array of Member IDs that have been mentioned in the Story description. | 
**storyType** | **string** | The type of story (feature, bug, chore). | 
**customFields** | [**\Timetoreply\Shortcut\Model\StoryCustomField[]**](StoryCustomField.md) | An array of CustomField value assertions for the story. | [optional] 
**fileIds** | **int[]** | An array of IDs of Files attached to the story. | 
**numTasksCompleted** | **int** | The number of tasks on the story which are complete. | 
**workflowId** | **int** | The ID of the workflow the story belongs to. | 
**completedAtOverride** | [**\DateTime**](\DateTime.md) | A manual override for the time/date the Story was completed. | 
**startedAt** | [**\DateTime**](\DateTime.md) | The time/date the Story was started. | 
**completedAt** | [**\DateTime**](\DateTime.md) | The time/date the Story was completed. | 
**name** | **string** | The name of the story. | 
**globalId** | **string** |  | 
**completed** | **bool** | A true/false boolean indicating if the Story has been completed. | 
**blocker** | **bool** | A true/false boolean indicating if the Story is currently a blocker of another story. | 
**epicId** | **int** | The ID of the epic the story belongs to. | 
**unresolvedBlockerComments** | **int[]** | The IDs of any unresolved blocker comments on the Story. | [optional] 
**storyTemplateId** | **string** | The ID of the story template used to create this story, or null if not created using a template. | 
**externalLinks** | **string[]** | An array of external links (strings) associated with a Story | 
**previousIterationIds** | **int[]** | The IDs of the iteration the story belongs to. | 
**requestedById** | **string** | The ID of the Member that requested the story. | 
**iterationId** | **int** | The ID of the iteration the story belongs to. | 
**labelIds** | **int[]** | An array of label ids attached to the story. | 
**startedAtOverride** | [**\DateTime**](\DateTime.md) | A manual override for the time/date the Story was started. | 
**groupId** | **string** | The ID of the group associated with the story. | 
**workflowStateId** | **int** | The ID of the workflow state the story is currently in. | 
**updatedAt** | [**\DateTime**](\DateTime.md) | The time/date the Story was updated. | 
**groupMentionIds** | **string[]** | An array of Group IDs that have been mentioned in the Story description. | 
**followerIds** | **string[]** | An array of UUIDs for any Members listed as Followers. | 
**ownerIds** | **string[]** | An array of UUIDs of the owners of this story. | 
**externalId** | **string** | This field can be set to another unique ID. In the case that the Story has been imported from another tool, the ID in the other tool can be indicated here. | 
**id** | **int** | The unique ID of the Story. | 
**leadTime** | **int** | The lead time (in seconds) of this story when complete. | [optional] 
**estimate** | **int** | The numeric point estimate of the story. Can also be null, which means unestimated. | 
**position** | **int** | A number representing the position of the story in relation to every other story in the current project. | 
**blocked** | **bool** | A true/false boolean indicating if the Story is currently blocked. | 
**projectId** | **int** | The ID of the project the story belongs to. | 
**linkedFileIds** | **int[]** | An array of IDs of LinkedFiles attached to the story. | 
**deadline** | [**\DateTime**](\DateTime.md) | The due date of the story. | 
**stats** | [**\Timetoreply\Shortcut\Model\StoryStats**](StoryStats.md) |  | 
**commentIds** | **int[]** | An array of IDs of Comments attached to the story. | 
**cycleTime** | **int** | The cycle time (in seconds) of this story when complete. | [optional] 
**createdAt** | [**\DateTime**](\DateTime.md) | The time/date the Story was created. | 
**movedAt** | [**\DateTime**](\DateTime.md) | The time/date the Story was last changed workflow-state. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

