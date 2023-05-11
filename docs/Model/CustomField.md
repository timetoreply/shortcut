# CustomField

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | A string description of the CustomField | [optional] 
**iconSetIdentifier** | **string** | A string that represents the icon that corresponds to this custom field. | [optional] 
**entityType** | **string** | A string description of this resource. | 
**storyTypes** | **string[]** | The types of stories this CustomField is scoped to. | [optional] 
**name** | **string** | The name of the Custom Field. | 
**fixedPosition** | **bool** | When true, the CustomFieldEnumValues may not be reordered. | [optional] 
**updatedAt** | [**\DateTime**](\DateTime.md) | The instant when this CustomField was last updated. | 
**id** | **string** | The unique public ID for the CustomField. | 
**values** | [**\Timetoreply\Shortcut\Model\CustomFieldEnumValue[]**](CustomFieldEnumValue.md) | A collection of legal values for a CustomField. | [optional] 
**fieldType** | **string** | The type of Custom Field, eg. &#x27;enum&#x27;. | 
**position** | **int** | An integer indicating the position of this Custom Field with respect to the other CustomField | 
**canonicalName** | **string** | The canonical name for a Shortcut-defined field. | [optional] 
**enabled** | **bool** | When true, the CustomField can be applied to entities in the Workspace. | 
**createdAt** | [**\DateTime**](\DateTime.md) | The instant when this CustomField was created. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

