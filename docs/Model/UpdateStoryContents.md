# UpdateStoryContents

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | The description of the story. | [optional] 
**entityType** | **string** | A string description of this resource. | [optional] 
**labels** | [**\Timetoreply\Shortcut\Model\CreateLabelParams[]**](CreateLabelParams.md) | An array of labels to be populated by the template. | [optional] 
**storyType** | **string** | The type of story (feature, bug, chore). | [optional] 
**customFields** | [**\Timetoreply\Shortcut\Model\CustomFieldValueParams[]**](CustomFieldValueParams.md) | An array of maps specifying a CustomField ID and CustomFieldEnumValue ID that represents an assertion of some value for a CustomField. | [optional] 
**linkedFiles** | [**\Timetoreply\Shortcut\Model\LinkedFile[]**](LinkedFile.md) | An array of linked files attached to the story. | [optional] 
**fileIds** | **int[]** | An array of the attached file IDs to be populated. | [optional] 
**name** | **string** | The name of the story. | [optional] 
**epicId** | **int** | The ID of the epic the to be populated. | [optional] 
**externalLinks** | **string[]** | An array of external links to be populated. | [optional] 
**iterationId** | **int** | The ID of the iteration the to be populated. | [optional] 
**tasks** | [**\Timetoreply\Shortcut\Model\EntityTemplateTask[]**](EntityTemplateTask.md) | An array of tasks to be populated by the template. | [optional] 
**labelIds** | **int[]** | An array of label ids attached to the story. | [optional] 
**groupId** | **string** | The ID of the group to be populated. | [optional] 
**workflowStateId** | **int** | The ID of the workflow state the story is currently in. | [optional] 
**followerIds** | **string[]** | An array of UUIDs for any Members listed as Followers. | [optional] 
**ownerIds** | **string[]** | An array of UUIDs of the owners of this story. | [optional] 
**estimate** | **int** | The numeric point estimate to be populated. | [optional] 
**files** | [**\Timetoreply\Shortcut\Model\UploadedFile[]**](UploadedFile.md) | An array of files attached to the story. | [optional] 
**projectId** | **int** | The ID of the project the story belongs to. | [optional] 
**linkedFileIds** | **int[]** | An array of the linked file IDs to be populated. | [optional] 
**deadline** | [**\DateTime**](\DateTime.md) | The due date of the story. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

