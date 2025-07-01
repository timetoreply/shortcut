# # CreateStoryContents

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | The description of the story. | [optional]
**labels** | [**\Timetoreply\Shortcut\Model\CreateLabelParams[]**](CreateLabelParams.md) | An array of labels to be populated by the template. | [optional]
**storyType** | **string** | The type of story (feature, bug, chore). | [optional]
**customFields** | [**\Timetoreply\Shortcut\Model\CustomFieldValueParams[]**](CustomFieldValueParams.md) | An array of maps specifying a CustomField ID and CustomFieldEnumValue ID that represents an assertion of some value for a CustomField. | [optional]
**fileIds** | **int[]** | An array of the attached file IDs to be populated. | [optional]
**name** | **string** | The name of the story. | [optional]
**epicId** | **int** | The ID of the epic the to be populated. | [optional]
**externalLinks** | **string[]** | An array of external links to be populated. | [optional]
**subTasks** | [**\Timetoreply\Shortcut\Model\CreateSubTaskParams[]**](CreateSubTaskParams.md) | An array of sub-tasks connected to the story | [optional]
**iterationId** | **int** | The ID of the iteration the to be populated. | [optional]
**tasks** | [**\Timetoreply\Shortcut\Model\BaseTaskParams[]**](BaseTaskParams.md) | An array of tasks to be populated by the template. | [optional]
**groupId** | **string** | The ID of the group to be populated. | [optional]
**workflowStateId** | **int** | The ID of the workflow state to be populated. | [optional]
**followerIds** | **string[]** | An array of UUIDs for any Members listed as Followers. | [optional]
**ownerIds** | **string[]** | An array of UUIDs of the owners of this story. | [optional]
**estimate** | **int** | The numeric point estimate to be populated. | [optional]
**projectId** | **int** | The ID of the project the story belongs to. | [optional]
**linkedFileIds** | **int[]** | An array of the linked file IDs to be populated. | [optional]
**deadline** | **\DateTime** | The due date of the story. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
