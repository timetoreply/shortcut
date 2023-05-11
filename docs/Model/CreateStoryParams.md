# CreateStoryParams

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | The description of the story. | [optional] 
**archived** | **bool** | Controls the story&#x27;s archived state. | [optional] 
**storyLinks** | [**\Timetoreply\Shortcut\Model\CreateStoryLinkParams[]**](CreateStoryLinkParams.md) | An array of story links attached to the story. | [optional] 
**labels** | [**\Timetoreply\Shortcut\Model\CreateLabelParams[]**](CreateLabelParams.md) | An array of labels attached to the story. | [optional] 
**storyType** | **string** | The type of story (feature, bug, chore). | [optional] 
**customFields** | [**\Timetoreply\Shortcut\Model\CustomFieldValueParams[]**](CustomFieldValueParams.md) | A map specifying a CustomField ID and CustomFieldEnumValue ID that represents an assertion of some value for a CustomField. | [optional] 
**moveTo** | **string** | One of \&quot;first\&quot; or \&quot;last\&quot;. This can be used to move the given story to the first or last position in the workflow state. | [optional] 
**fileIds** | **int[]** | An array of IDs of files attached to the story. | [optional] 
**completedAtOverride** | [**\DateTime**](\DateTime.md) | A manual override for the time/date the Story was completed. | [optional] 
**name** | **string** | The name of the story. | 
**comments** | [**\Timetoreply\Shortcut\Model\CreateStoryCommentParams[]**](CreateStoryCommentParams.md) | An array of comments to add to the story. | [optional] 
**epicId** | **int** | The ID of the epic the story belongs to. | [optional] 
**storyTemplateId** | **string** | The id of the story template used to create this story, if applicable. This is just an association; no content from the story template is inherited by the story simply by setting this field. | [optional] 
**externalLinks** | **string[]** | An array of External Links associated with this story. | [optional] 
**requestedById** | **string** | The ID of the member that requested the story. | [optional] 
**iterationId** | **int** | The ID of the iteration the story belongs to. | [optional] 
**tasks** | [**\Timetoreply\Shortcut\Model\CreateTaskParams[]**](CreateTaskParams.md) | An array of tasks connected to the story. | [optional] 
**startedAtOverride** | [**\DateTime**](\DateTime.md) | A manual override for the time/date the Story was started. | [optional] 
**groupId** | **string** | The id of the group to associate with this story. | [optional] 
**workflowStateId** | **int** | The ID of the workflow state the story will be in. | [optional] 
**updatedAt** | [**\DateTime**](\DateTime.md) | The time/date the Story was updated. | [optional] 
**followerIds** | **string[]** | An array of UUIDs of the followers of this story. | [optional] 
**ownerIds** | **string[]** | An array of UUIDs of the owners of this story. | [optional] 
**externalId** | **string** | This field can be set to another unique ID. In the case that the Story has been imported from another tool, the ID in the other tool can be indicated here. | [optional] 
**estimate** | **int** | The numeric point estimate of the story. Can also be null, which means unestimated. | [optional] 
**projectId** | **int** | The ID of the project the story belongs to. | [optional] 
**linkedFileIds** | **int[]** | An array of IDs of linked files attached to the story. | [optional] 
**deadline** | [**\DateTime**](\DateTime.md) | The due date of the story. | [optional] 
**createdAt** | [**\DateTime**](\DateTime.md) | The time/date the Story was created. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

