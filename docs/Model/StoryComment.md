# # StoryComment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**appUrl** | **string** | The Shortcut application url for the Comment. |
**entityType** | **string** | A string description of this resource. |
**deleted** | **bool** | True/false boolean indicating whether the Comment has been deleted. |
**storyId** | **int** | The ID of the Story on which the Comment appears. |
**mentionIds** | **string[]** | &#x60;Deprecated:&#x60; use &#x60;member_mention_ids&#x60;. |
**authorId** | **string** | The unique ID of the Member who is the Comment&#39;s author. |
**memberMentionIds** | **string[]** | The unique IDs of the Member who are mentioned in the Comment. |
**blocker** | **bool** | Marks the comment as a blocker that can be surfaced to permissions or teams mentioned in the comment. Can only be used on a top-level comment. | [optional]
**linkedToSlack** | **bool** | Whether the Comment is currently the root of a thread that is linked to Slack. |
**updatedAt** | **\DateTime** | The time/date when the Comment was updated. |
**groupMentionIds** | **string[]** | The unique IDs of the Group who are mentioned in the Comment. |
**externalId** | **string** | This field can be set to another unique ID. In the case that the Comment has been imported from another tool, the ID in the other tool can be indicated here. |
**parentId** | **int** | The ID of the parent Comment this Comment is threaded under. | [optional]
**id** | **int** | The unique ID of the Comment. |
**position** | **int** | The Comments numerical position in the list from oldest to newest. |
**unblocksParent** | **bool** | Marks the comment as an unblocker to its  blocker parent. Can only be set on a threaded comment who has a parent with &#x60;blocker&#x60; set. | [optional]
**reactions** | [**\Timetoreply\Shortcut\Model\StoryReaction[]**](StoryReaction.md) | A set of Reactions to this Comment. |
**createdAt** | **\DateTime** | The time/date when the Comment was created. |
**text** | **string** | The text of the Comment. In the case that the Comment has been deleted, this field can be set to nil. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
