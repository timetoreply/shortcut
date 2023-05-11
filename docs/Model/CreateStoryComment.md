# CreateStoryComment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**authorId** | **string** | The Member ID of the Comment&#x27;s author. Defaults to the user identified by the API token. | [optional] 
**blocker** | **bool** | Marks the comment as a blocker that can be surfaced to permissions or teams mentioned in the comment. Can only be used on a top-level comment. | [optional] 
**updatedAt** | [**\DateTime**](\DateTime.md) | Defaults to the time/date the comment is last updated, but can be set to reflect another date. | [optional] 
**externalId** | **string** | This field can be set to another unique ID. In the case that the comment has been imported from another tool, the ID in the other tool can be indicated here. | [optional] 
**parentId** | **int** | The ID of the Comment that this comment is threaded under. | [optional] 
**unblocksParent** | **bool** | Marks the comment as an unblocker to its  blocker parent. Can only be set on a threaded comment who has a parent with &#x60;blocker&#x60; set. | [optional] 
**createdAt** | [**\DateTime**](\DateTime.md) | Defaults to the time/date the comment is created, but can be set to reflect another date. | [optional] 
**text** | **string** | The comment text. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

