# UploadedFile

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | The description of the file. | 
**entityType** | **string** | A string description of this resource. | 
**storyIds** | **int[]** | The unique IDs of the Stories associated with this file. | 
**mentionIds** | **string[]** | Deprecated: use member_mention_ids. | 
**memberMentionIds** | **string[]** | The unique IDs of the Members who are mentioned in the file description. | 
**name** | **string** | The optional User-specified name of the file. | 
**thumbnailUrl** | **string** | The url where the thumbnail of the file can be found in Shortcut. | 
**size** | **int** | The size of the file. | 
**uploaderId** | **string** | The unique ID of the Member who uploaded the file. | 
**contentType** | **string** | Free form string corresponding to a text or image file. | 
**updatedAt** | [**\DateTime**](\DateTime.md) | The time/date that the file was updated. | 
**filename** | **string** | The name assigned to the file in Shortcut upon upload. | 
**groupMentionIds** | **string[]** | The unique IDs of the Groups who are mentioned in the file description. | 
**externalId** | **string** | This field can be set to another unique ID. In the case that the File has been imported from another tool, the ID in the other tool can be indicated here. | 
**id** | **int** | The unique ID for the file. | 
**url** | **string** | The URL for the file. | 
**createdAt** | [**\DateTime**](\DateTime.md) | The time/date that the file was created. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

