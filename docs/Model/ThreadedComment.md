# # ThreadedComment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**appUrl** | **string** | The Shortcut application url for the Comment. |
**entityType** | **string** | A string description of this resource. |
**deleted** | **bool** | True/false boolean indicating whether the Comment is deleted. |
**mentionIds** | **string[]** | &#x60;Deprecated:&#x60; use &#x60;member_mention_ids&#x60;. |
**authorId** | **string** | The unique ID of the Member that authored the Comment. |
**memberMentionIds** | **string[]** | An array of Member IDs that have been mentioned in this Comment. |
**comments** | [**\Timetoreply\Shortcut\Model\ThreadedComment[]**](ThreadedComment.md) | A nested array of threaded comments. |
**updatedAt** | **\DateTime** | The time/date the Comment was updated. |
**groupMentionIds** | **string[]** | An array of Group IDs that have been mentioned in this Comment. |
**externalId** | **string** | This field can be set to another unique ID. In the case that the Comment has been imported from another tool, the ID in the other tool can be indicated here. |
**id** | **int** | The unique ID of the Comment. |
**createdAt** | **\DateTime** | The time/date the Comment was created. |
**text** | **string** | The text of the Comment. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
