# Search

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**query** | **string** | See our help center article on [search operators](https://help.shortcut.com/hc/en-us/articles/360000046646-Search-Operators) | 
**pageSize** | **int** | The number of search results to include in a page. Minimum of 1 and maximum of 25. | [optional] 
**detail** | **string** | The amount of detail included in each result item.    \&quot;full\&quot; will include all descriptions and comments and more fields on    related items such as pull requests, branches and tasks.    \&quot;slim\&quot; omits larger fulltext fields such as descriptions and comments    and only references related items by id.    The default is \&quot;full\&quot;. | [optional] 
**next** | **string** | The next page token. | [optional] 
**include** | **string** |  | [optional] 
**entityTypes** | **string[]** | A collection of entity_types to search. Defaults to story and epic. Supports: epic, iteration, milestone, story. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

