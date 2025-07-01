# # SearchStories

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**archived** | **bool** | A true/false boolean indicating whether the Story is in archived state. | [optional]
**ownerId** | **string** | An array of UUIDs for any Users who may be Owners of the Stories. | [optional]
**storyType** | **string** | The type of Stories that you want returned. | [optional]
**epicIds** | **int[]** | The Epic IDs that may be associated with the Stories. | [optional]
**projectIds** | **int[]** | The IDs for the Projects the Stories may be assigned to. | [optional]
**updatedAtEnd** | **\DateTime** | Stories should have been updated on or before this date. | [optional]
**completedAtEnd** | **\DateTime** | Stories should have been completed on or before this date. | [optional]
**workflowStateTypes** | **string[]** | The type of Workflow State the Stories may be in. | [optional]
**deadlineEnd** | **\DateTime** | Stories should have a deadline on or before this date. | [optional]
**createdAtStart** | **\DateTime** | Stories should have been created on or after this date. | [optional]
**epicId** | **int** | The Epic IDs that may be associated with the Stories. | [optional]
**labelName** | **string** | The name of any associated Labels. | [optional]
**requestedById** | **string** | The UUID of any Users who may have requested the Stories. | [optional]
**iterationId** | **int** | The Iteration ID that may be associated with the Stories. | [optional]
**labelIds** | **int[]** | The Label IDs that may be associated with the Stories. | [optional]
**groupId** | **string** | The Group ID that is associated with the Stories | [optional]
**workflowStateId** | **int** | The unique IDs of the specific Workflow States that the Stories should be in. | [optional]
**iterationIds** | **int[]** | The Iteration IDs that may be associated with the Stories. | [optional]
**createdAtEnd** | **\DateTime** | Stories should have been created on or before this date. | [optional]
**deadlineStart** | **\DateTime** | Stories should have a deadline on or after this date. | [optional]
**groupIds** | **string[]** | The Group IDs that are associated with the Stories | [optional]
**ownerIds** | **string[]** | An array of UUIDs for any Users who may be Owners of the Stories. | [optional]
**externalId** | **string** | An ID or URL that references an external resource. Useful during imports. | [optional]
**includesDescription** | **bool** | Whether to include the story description in the response. | [optional]
**estimate** | **int** | The number of estimate points associate with the Stories. | [optional]
**projectId** | **int** | The IDs for the Projects the Stories may be assigned to. | [optional]
**completedAtStart** | **\DateTime** | Stories should have been completed on or after this date. | [optional]
**updatedAtStart** | **\DateTime** | Stories should have been updated on or after this date. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
