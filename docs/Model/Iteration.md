# Iteration

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**appUrl** | **string** | The Shortcut application url for the Iteration. | 
**description** | **string** | The description of the iteration. | 
**entityType** | **string** | A string description of this resource | 
**labels** | [**\Timetoreply\Shortcut\Model\Label[]**](Label.md) | An array of labels attached to the iteration. | 
**mentionIds** | **string[]** | Deprecated: use member_mention_ids. | 
**memberMentionIds** | **string[]** | An array of Member IDs that have been mentioned in the Story description. | 
**associatedGroups** | [**\Timetoreply\Shortcut\Model\IterationAssociatedGroup[]**](IterationAssociatedGroup.md) | An array containing Group IDs and Group-owned story counts for the Iteration&#x27;s associated groups. | 
**name** | **string** | The name of the iteration. | 
**globalId** | **string** |  | 
**labelIds** | **int[]** | An array of label ids attached to the iteration. | 
**updatedAt** | [**\DateTime**](\DateTime.md) | The instant when this iteration was last updated. | 
**groupMentionIds** | **string[]** | An array of Group IDs that have been mentioned in the Story description. | 
**endDate** | [**\DateTime**](\DateTime.md) | The date this iteration begins. | 
**followerIds** | **string[]** | An array of UUIDs for any Members listed as Followers. | 
**groupIds** | **string[]** | An array of UUIDs for any Groups you want to add as Followers. Currently, only one Group association is presented in our web UI. | 
**startDate** | [**\DateTime**](\DateTime.md) | The date this iteration begins. | 
**status** | **string** | The status of the iteration. Values are either \&quot;unstarted\&quot;, \&quot;started\&quot;, or \&quot;done\&quot;. | 
**id** | **int** | The ID of the iteration. | 
**stats** | [**\Timetoreply\Shortcut\Model\IterationStats**](IterationStats.md) |  | 
**createdAt** | [**\DateTime**](\DateTime.md) | The instant when this iteration was created. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

