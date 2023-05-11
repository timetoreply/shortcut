# StoryContents

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | The description of the story. | [optional] 
**entityType** | **string** | A string description of this resource. | [optional] 
**labels** | [**\Timetoreply\Shortcut\Model\LabelSlim[]**](LabelSlim.md) | An array of labels attached to the story. | [optional] 
**storyType** | **string** | The type of story (feature, bug, chore). | [optional] 
**customFields** | [**\Timetoreply\Shortcut\Model\CustomFieldValueParams[]**](CustomFieldValueParams.md) | An array of maps specifying a CustomField ID and CustomFieldEnumValue ID that represents an assertion of some value for a CustomField. | [optional] 
**linkedFiles** | [**\Timetoreply\Shortcut\Model\LinkedFile[]**](LinkedFile.md) | An array of linked files attached to the story. | [optional] 
**name** | **string** | The name of the story. | [optional] 
**epicId** | **int** | The ID of the epic the story belongs to. | [optional] 
**externalLinks** | **string[]** | An array of external links connected to the story. | [optional] 
**iterationId** | **int** | The ID of the iteration the story belongs to. | [optional] 
**tasks** | [**\Timetoreply\Shortcut\Model\StoryContentsTask[]**](StoryContentsTask.md) | An array of tasks connected to the story. | [optional] 
**labelIds** | **int[]** | An array of label ids attached to the story. | [optional] 
**groupId** | **string** | The ID of the group to which the story is assigned. | [optional] 
**workflowStateId** | **int** | The ID of the workflow state the story is currently in. | [optional] 
**followerIds** | **string[]** | An array of UUIDs for any Members listed as Followers. | [optional] 
**ownerIds** | **string[]** | An array of UUIDs of the owners of this story. | [optional] 
**estimate** | **int** | The numeric point estimate of the story. Can also be null, which means unestimated. | [optional] 
**files** | [**\Timetoreply\Shortcut\Model\UploadedFile[]**](UploadedFile.md) | An array of files attached to the story. | [optional] 
**projectId** | **int** | The ID of the project the story belongs to. | [optional] 
**deadline** | [**\DateTime**](\DateTime.md) | The due date of the story. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

