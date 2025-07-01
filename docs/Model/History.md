# # History

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**actorName** | **string** | The name of the actor that performed the action, if it can be determined. | [optional]
**changedAt** | **string** | The date when the change occurred. |
**primaryId** | [**\Timetoreply\Shortcut\Model\HistoryPrimaryId**](HistoryPrimaryId.md) |  | [optional]
**references** | [**\Timetoreply\Shortcut\Model\HistoryReferencesInner[]**](HistoryReferencesInner.md) | An array of objects affected by the change. Reference objects provide basic information for the entities reference in the history actions. Some have specific fields, but they always contain an id, entity_type, and a name. | [optional]
**actions** | [**\Timetoreply\Shortcut\Model\HistoryActionsInner[]**](HistoryActionsInner.md) | An array of actions that were performed for the change. |
**memberId** | **string** | The ID of the member who performed the change. | [optional]
**externalId** | **string** | The ID of the webhook that handled the change. | [optional]
**id** | **string** | The ID representing the change for the story. |
**version** | **string** | The version of the change format. |
**webhookId** | **string** | The ID of the webhook that handled the change. | [optional]
**automationId** | **string** | The ID of the automation that performed the change. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
