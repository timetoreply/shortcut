# UpdateStory

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | The description of the story. | [optional] 
**archived** | **bool** | True if the story is archived, otherwise false. | [optional] 
**labels** | [**\Timetoreply\Shortcut\Model\CreateLabelParams[]**](CreateLabelParams.md) | An array of labels attached to the story. | [optional] 
**pullRequestIds** | **int[]** | An array of IDs of Pull/Merge Requests attached to the story. | [optional] 
**storyType** | **string** | The type of story (feature, bug, chore). | [optional] 
**customFields** | [**\Timetoreply\Shortcut\Model\CustomFieldValueParams[]**](CustomFieldValueParams.md) | A map specifying a CustomField ID and CustomFieldEnumValue ID that represents an assertion of some value for a CustomField. | [optional] 
**moveTo** | **string** | One of \&quot;first\&quot; or \&quot;last\&quot;. This can be used to move the given story to the first or last position in the workflow state. | [optional] 
**fileIds** | **int[]** | An array of IDs of files attached to the story. | [optional] 
**completedAtOverride** | [**\DateTime**](\DateTime.md) | A manual override for the time/date the Story was completed. | [optional] 
**name** | **string** | The title of the story. | [optional] 
**epicId** | **int** | The ID of the epic the story belongs to. | [optional] 
**externalLinks** | **string[]** | An array of External Links associated with this story. | [optional] 
**branchIds** | **int[]** | An array of IDs of Branches attached to the story. | [optional] 
**commitIds** | **int[]** | An array of IDs of Commits attached to the story. | [optional] 
**requestedById** | **string** | The ID of the member that requested the story. | [optional] 
**iterationId** | **int** | The ID of the iteration the story belongs to. | [optional] 
**startedAtOverride** | [**\DateTime**](\DateTime.md) | A manual override for the time/date the Story was started. | [optional] 
**groupId** | **string** | The ID of the group to associate with this story | [optional] 
**workflowStateId** | **int** | The ID of the workflow state to put the story in. | [optional] 
**followerIds** | **string[]** | An array of UUIDs of the followers of this story. | [optional] 
**ownerIds** | **string[]** | An array of UUIDs of the owners of this story. | [optional] 
**beforeId** | **int** | The ID of the story we want to move this story before. | [optional] 
**estimate** | **int** | The numeric point estimate of the story. Can also be null, which means unestimated. | [optional] 
**afterId** | **int** | The ID of the story we want to move this story after. | [optional] 
**projectId** | **int** | The ID of the project the story belongs to. | [optional] 
**linkedFileIds** | **int[]** | An array of IDs of linked files attached to the story. | [optional] 
**deadline** | [**\DateTime**](\DateTime.md) | The due date of the story. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

