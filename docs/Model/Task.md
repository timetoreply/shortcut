# # Task

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | Full text of the Task. |
**entityType** | **string** | A string description of this resource. |
**storyId** | **int** | The unique identifier of the parent Story. |
**mentionIds** | **string[]** | &#x60;Deprecated:&#x60; use &#x60;member_mention_ids&#x60;. |
**memberMentionIds** | **string[]** | An array of UUIDs of Members mentioned in this Task. |
**completedAt** | **\DateTime** | The time/date the Task was completed. |
**globalId** | **string** |  |
**updatedAt** | **\DateTime** | The time/date the Task was updated. |
**groupMentionIds** | **string[]** | An array of UUIDs of Groups mentioned in this Task. |
**ownerIds** | **string[]** | An array of UUIDs of the Owners of this Task. |
**externalId** | **string** | This field can be set to another unique ID. In the case that the Task has been imported from another tool, the ID in the other tool can be indicated here. |
**id** | **int** | The unique ID of the Task. |
**position** | **int** | The number corresponding to the Task&#39;s position within a list of Tasks on a Story. |
**complete** | **bool** | True/false boolean indicating whether the Task has been completed. |
**createdAt** | **\DateTime** | The time/date the Task was created. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
