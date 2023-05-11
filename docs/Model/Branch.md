# Branch

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**entityType** | **string** | A string description of this resource. | 
**deleted** | **bool** | A true/false boolean indicating if the Branch has been deleted. | 
**name** | **string** | The name of the Branch. | 
**persistent** | **bool** | A true/false boolean indicating if the Branch is persistent; e.g. master. | 
**updatedAt** | [**\DateTime**](\DateTime.md) | The time/date the Branch was updated. | 
**pullRequests** | [**\Timetoreply\Shortcut\Model\PullRequest[]**](PullRequest.md) | An array of PullRequests attached to the Branch (there is usually only one). | 
**mergedBranchIds** | **int[]** | The IDs of the Branches the Branch has been merged into. | 
**id** | **int** | The unique ID of the Branch. | 
**url** | **string** | The URL of the Branch. | 
**repositoryId** | **int** | The ID of the Repository that contains the Branch. | 
**createdAt** | [**\DateTime**](\DateTime.md) | The time/date the Branch was created. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

