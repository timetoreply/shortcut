# History

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**changedAt** | **string** | The date when the change occurred. | 
**primaryId** | **object** | The ID of the primary entity that has changed, if applicable. | [optional] 
**references** | **object[]** | An array of objects affected by the change. Reference objects provide basic information for the entities reference in the history actions. Some have specific fields, but they always contain an id, entity_type, and a name. | [optional] 
**actions** | **object[]** | An array of actions that were performed for the change. | 
**memberId** | **string** | The ID of the member who performed the change. | [optional] 
**externalId** | **string** | The ID of the webhook that handled the change. | [optional] 
**id** | **string** | The ID representing the change for the story. | 
**version** | **string** | The version of the change format. | 
**webhookId** | **string** | The ID of the webhook that handled the change. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

