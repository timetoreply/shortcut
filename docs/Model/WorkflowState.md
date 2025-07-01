# # WorkflowState

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | The description of what sort of Stories belong in that Workflow state. |
**entityType** | **string** | A string description of this resource. |
**color** | **string** | The hex color for this Workflow State. | [optional]
**verb** | **string** | The verb that triggers a move to that Workflow State when making VCS commits. |
**name** | **string** | The Workflow State&#39;s name. |
**globalId** | **string** |  |
**numStories** | **int** | The number of Stories currently in that Workflow State. |
**type** | **string** | The type of Workflow State (Unstarted, Started, or Finished) |
**updatedAt** | **\DateTime** | When the Workflow State was last updated. |
**id** | **int** | The unique ID of the Workflow State. |
**numStoryTemplates** | **int** | The number of Story Templates associated with that Workflow State. |
**position** | **int** | The position that the Workflow State is in, starting with 0 at the left. |
**createdAt** | **\DateTime** | The time/date the Workflow State was created. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
