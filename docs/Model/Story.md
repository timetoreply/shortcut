# # Story

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**appUrl** | **string** | The Shortcut application url for the Story. |
**description** | **string** | The description of the story. |
**archived** | **bool** | True if the story has been archived or not. |
**started** | **bool** | A true/false boolean indicating if the Story has been started. |
**storyLinks** | [**\Timetoreply\Shortcut\Model\TypedStoryLink[]**](TypedStoryLink.md) | An array of story links attached to the Story. |
**entityType** | **string** | A string description of this resource. |
**labels** | [**\Timetoreply\Shortcut\Model\LabelSlim[]**](LabelSlim.md) | An array of labels attached to the story. |
**mentionIds** | **string[]** | &#x60;Deprecated:&#x60; use &#x60;member_mention_ids&#x60;. |
**syncedItem** | [**\Timetoreply\Shortcut\Model\SyncedItem**](SyncedItem.md) |  | [optional]
**memberMentionIds** | **string[]** | An array of Member IDs that have been mentioned in the Story description. |
**storyType** | **string** | The type of story (feature, bug, chore). |
**customFields** | [**\Timetoreply\Shortcut\Model\StoryCustomField[]**](StoryCustomField.md) | An array of CustomField value assertions for the story. | [optional]
**linkedFiles** | [**\Timetoreply\Shortcut\Model\LinkedFile[]**](LinkedFile.md) | An array of linked files attached to the story. |
**workflowId** | **int** | The ID of the workflow the story belongs to. |
**completedAtOverride** | **\DateTime** | A manual override for the time/date the Story was completed. |
**startedAt** | **\DateTime** | The time/date the Story was started. |
**completedAt** | **\DateTime** | The time/date the Story was completed. |
**name** | **string** | The name of the story. |
**globalId** | **string** |  |
**completed** | **bool** | A true/false boolean indicating if the Story has been completed. |
**comments** | [**\Timetoreply\Shortcut\Model\StoryComment[]**](StoryComment.md) | An array of comments attached to the story. |
**blocker** | **bool** | A true/false boolean indicating if the Story is currently a blocker of another story. |
**branches** | [**\Timetoreply\Shortcut\Model\Branch[]**](Branch.md) | An array of Git branches attached to the story. |
**epicId** | **int** | The ID of the epic the story belongs to. |
**storyTemplateId** | **string** | The ID of the story template used to create this story, or null if not created using a template. |
**externalLinks** | **string[]** | An array of external links (strings) associated with a Story |
**previousIterationIds** | **int[]** | The IDs of the iteration the story belongs to. |
**requestedById** | **string** | The ID of the Member that requested the story. |
**iterationId** | **int** | The ID of the iteration the story belongs to. |
**subTaskStoryIds** | **int[]** |  | [optional]
**tasks** | [**\Timetoreply\Shortcut\Model\Task[]**](Task.md) | An array of tasks connected to the story. |
**formattedVcsBranchName** | **string** | The formatted branch name for this story. | [optional]
**labelIds** | **int[]** | An array of label ids attached to the story. |
**startedAtOverride** | **\DateTime** | A manual override for the time/date the Story was started. |
**groupId** | **string** | The ID of the group associated with the story. |
**workflowStateId** | **int** | The ID of the workflow state the story is currently in. |
**updatedAt** | **\DateTime** | The time/date the Story was updated. |
**pullRequests** | [**\Timetoreply\Shortcut\Model\PullRequest[]**](PullRequest.md) | An array of Pull/Merge Requests attached to the story. |
**groupMentionIds** | **string[]** | An array of Group IDs that have been mentioned in the Story description. |
**followerIds** | **string[]** | An array of UUIDs for any Members listed as Followers. |
**ownerIds** | **string[]** | An array of UUIDs of the owners of this story. |
**externalId** | **string** | This field can be set to another unique ID. In the case that the Story has been imported from another tool, the ID in the other tool can be indicated here. |
**id** | **int** | The unique ID of the Story. |
**leadTime** | **int** | The lead time (in seconds) of this story when complete. | [optional]
**parentStoryId** | **int** |  | [optional]
**estimate** | **int** | The numeric point estimate of the story. Can also be null, which means unestimated. |
**commits** | [**\Timetoreply\Shortcut\Model\Commit[]**](Commit.md) | An array of commits attached to the story. |
**files** | [**\Timetoreply\Shortcut\Model\UploadedFile[]**](UploadedFile.md) | An array of files attached to the story. |
**position** | **int** | A number representing the position of the story in relation to every other story in the current project. |
**blocked** | **bool** | A true/false boolean indicating if the Story is currently blocked. |
**projectId** | **int** | The ID of the project the story belongs to. |
**deadline** | **\DateTime** | The due date of the story. |
**stats** | [**\Timetoreply\Shortcut\Model\StoryStats**](StoryStats.md) |  |
**cycleTime** | **int** | The cycle time (in seconds) of this story when complete. | [optional]
**createdAt** | **\DateTime** | The time/date the Story was created. |
**movedAt** | **\DateTime** | The time/date the Story was last changed workflow-state. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
