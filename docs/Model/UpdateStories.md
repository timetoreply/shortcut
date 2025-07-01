# # UpdateStories

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**archived** | **bool** | If the Stories should be archived or not. | [optional]
**storyIds** | **int[]** | The Ids of the Stories you wish to update. |
**storyType** | **string** | The type of story (feature, bug, chore). | [optional]
**moveTo** | **string** | One of \&quot;first\&quot; or \&quot;last\&quot;. This can be used to move the given story to the first or last position in the workflow state. | [optional]
**followerIdsAdd** | **string[]** | The UUIDs of the new followers to be added. | [optional]
**epicId** | **int** | The ID of the epic the story belongs to. | [optional]
**externalLinks** | **string[]** | An array of External Links associated with this story. | [optional]
**followerIdsRemove** | **string[]** | The UUIDs of the followers to be removed. | [optional]
**requestedById** | **string** | The ID of the member that requested the story. | [optional]
**iterationId** | **int** | The ID of the iteration the story belongs to. | [optional]
**customFieldsRemove** | [**\Timetoreply\Shortcut\Model\CustomFieldValueParams[]**](CustomFieldValueParams.md) | A map specifying a CustomField ID and CustomFieldEnumValue ID that represents an assertion of some value for a CustomField. | [optional]
**labelsAdd** | [**\Timetoreply\Shortcut\Model\CreateLabelParams[]**](CreateLabelParams.md) | An array of labels to be added. | [optional]
**groupId** | **string** | The Id of the Group the Stories should belong to. | [optional]
**workflowStateId** | **int** | The ID of the workflow state to put the stories in. | [optional]
**beforeId** | **int** | The ID of the story that the stories are to be moved before. | [optional]
**estimate** | **int** | The numeric point estimate of the story. Can also be null, which means unestimated. | [optional]
**afterId** | **int** | The ID of the story that the stories are to be moved below. | [optional]
**ownerIdsRemove** | **string[]** | The UUIDs of the owners to be removed. | [optional]
**customFieldsAdd** | [**\Timetoreply\Shortcut\Model\CustomFieldValueParams[]**](CustomFieldValueParams.md) | A map specifying a CustomField ID and CustomFieldEnumValue ID that represents an assertion of some value for a CustomField. | [optional]
**projectId** | **int** | The ID of the Project the Stories should belong to. | [optional]
**labelsRemove** | [**\Timetoreply\Shortcut\Model\CreateLabelParams[]**](CreateLabelParams.md) | An array of labels to be removed. | [optional]
**deadline** | **\DateTime** | The due date of the story. | [optional]
**ownerIdsAdd** | **string[]** | The UUIDs of the new owners to be added. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
