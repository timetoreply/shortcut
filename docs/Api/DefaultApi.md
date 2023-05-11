# Timetoreply\Shortcut\DefaultApi

All URIs are relative to *https://api.app.shortcut.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCategory**](DefaultApi.md#createcategory) | **POST** /api/v3/categories | Create Category
[**createEntityTemplate**](DefaultApi.md#createentitytemplate) | **POST** /api/v3/entity-templates | Create Entity Template
[**createEpic**](DefaultApi.md#createepic) | **POST** /api/v3/epics | Create Epic
[**createEpicComment**](DefaultApi.md#createepiccomment) | **POST** /api/v3/epics/{epic-public-id}/comments | Create Epic Comment
[**createEpicCommentComment**](DefaultApi.md#createepiccommentcomment) | **POST** /api/v3/epics/{epic-public-id}/comments/{comment-public-id} | Create Epic Comment Comment
[**createGroup**](DefaultApi.md#creategroup) | **POST** /api/v3/groups | Create Group
[**createIteration**](DefaultApi.md#createiteration) | **POST** /api/v3/iterations | Create Iteration
[**createLabel**](DefaultApi.md#createlabel) | **POST** /api/v3/labels | Create Label
[**createLinkedFile**](DefaultApi.md#createlinkedfile) | **POST** /api/v3/linked-files | Create Linked File
[**createMilestone**](DefaultApi.md#createmilestone) | **POST** /api/v3/milestones | Create Milestone
[**createMultipleStories**](DefaultApi.md#createmultiplestories) | **POST** /api/v3/stories/bulk | Create Multiple Stories
[**createProject**](DefaultApi.md#createproject) | **POST** /api/v3/projects | Create Project
[**createStory**](DefaultApi.md#createstory) | **POST** /api/v3/stories | Create Story
[**createStoryComment**](DefaultApi.md#createstorycomment) | **POST** /api/v3/stories/{story-public-id}/comments | Create Story Comment
[**createStoryLink**](DefaultApi.md#createstorylink) | **POST** /api/v3/story-links | Create Story Link
[**createStoryReaction**](DefaultApi.md#createstoryreaction) | **POST** /api/v3/stories/{story-public-id}/comments/{comment-public-id}/reactions | Create Story Reaction
[**createTask**](DefaultApi.md#createtask) | **POST** /api/v3/stories/{story-public-id}/tasks | Create Task
[**deleteCategory**](DefaultApi.md#deletecategory) | **DELETE** /api/v3/categories/{category-public-id} | Delete Category
[**deleteCustomField**](DefaultApi.md#deletecustomfield) | **DELETE** /api/v3/custom-fields/{custom-field-public-id} | Delete Custom Field
[**deleteEntityTemplate**](DefaultApi.md#deleteentitytemplate) | **DELETE** /api/v3/entity-templates/{entity-template-public-id} | Delete Entity Template
[**deleteEpic**](DefaultApi.md#deleteepic) | **DELETE** /api/v3/epics/{epic-public-id} | Delete Epic
[**deleteEpicComment**](DefaultApi.md#deleteepiccomment) | **DELETE** /api/v3/epics/{epic-public-id}/comments/{comment-public-id} | Delete Epic Comment
[**deleteFile**](DefaultApi.md#deletefile) | **DELETE** /api/v3/files/{file-public-id} | Delete File
[**deleteIteration**](DefaultApi.md#deleteiteration) | **DELETE** /api/v3/iterations/{iteration-public-id} | Delete Iteration
[**deleteLabel**](DefaultApi.md#deletelabel) | **DELETE** /api/v3/labels/{label-public-id} | Delete Label
[**deleteLinkedFile**](DefaultApi.md#deletelinkedfile) | **DELETE** /api/v3/linked-files/{linked-file-public-id} | Delete Linked File
[**deleteMilestone**](DefaultApi.md#deletemilestone) | **DELETE** /api/v3/milestones/{milestone-public-id} | Delete Milestone
[**deleteMultipleStories**](DefaultApi.md#deletemultiplestories) | **DELETE** /api/v3/stories/bulk | Delete Multiple Stories
[**deleteProject**](DefaultApi.md#deleteproject) | **DELETE** /api/v3/projects/{project-public-id} | Delete Project
[**deleteStory**](DefaultApi.md#deletestory) | **DELETE** /api/v3/stories/{story-public-id} | Delete Story
[**deleteStoryComment**](DefaultApi.md#deletestorycomment) | **DELETE** /api/v3/stories/{story-public-id}/comments/{comment-public-id} | Delete Story Comment
[**deleteStoryLink**](DefaultApi.md#deletestorylink) | **DELETE** /api/v3/story-links/{story-link-public-id} | Delete Story Link
[**deleteStoryReaction**](DefaultApi.md#deletestoryreaction) | **DELETE** /api/v3/stories/{story-public-id}/comments/{comment-public-id}/reactions | Delete Story Reaction
[**deleteTask**](DefaultApi.md#deletetask) | **DELETE** /api/v3/stories/{story-public-id}/tasks/{task-public-id} | Delete Task
[**disableGroups**](DefaultApi.md#disablegroups) | **PUT** /api/v3/groups/disable | Disable Groups
[**disableIterations**](DefaultApi.md#disableiterations) | **PUT** /api/v3/iterations/disable | Disable Iterations
[**disableStoryTemplates**](DefaultApi.md#disablestorytemplates) | **PUT** /api/v3/entity-templates/disable | Disable Story Templates
[**enableGroups**](DefaultApi.md#enablegroups) | **PUT** /api/v3/groups/enable | Enable Groups
[**enableIterations**](DefaultApi.md#enableiterations) | **PUT** /api/v3/iterations/enable | Enable Iterations
[**enableStoryTemplates**](DefaultApi.md#enablestorytemplates) | **PUT** /api/v3/entity-templates/enable | Enable Story Templates
[**getCategory**](DefaultApi.md#getcategory) | **GET** /api/v3/categories/{category-public-id} | Get Category
[**getCurrentMemberInfo**](DefaultApi.md#getcurrentmemberinfo) | **GET** /api/v3/member | Get Current Member Info
[**getCustomField**](DefaultApi.md#getcustomfield) | **GET** /api/v3/custom-fields/{custom-field-public-id} | Get Custom Field
[**getEntityTemplate**](DefaultApi.md#getentitytemplate) | **GET** /api/v3/entity-templates/{entity-template-public-id} | Get Entity Template
[**getEpic**](DefaultApi.md#getepic) | **GET** /api/v3/epics/{epic-public-id} | Get Epic
[**getEpicComment**](DefaultApi.md#getepiccomment) | **GET** /api/v3/epics/{epic-public-id}/comments/{comment-public-id} | Get Epic Comment
[**getEpicWorkflow**](DefaultApi.md#getepicworkflow) | **GET** /api/v3/epic-workflow | Get Epic Workflow
[**getExternalLinkStories**](DefaultApi.md#getexternallinkstories) | **GET** /api/v3/external-link/stories | Get External Link Stories
[**getFile**](DefaultApi.md#getfile) | **GET** /api/v3/files/{file-public-id} | Get File
[**getGroup**](DefaultApi.md#getgroup) | **GET** /api/v3/groups/{group-public-id} | Get Group
[**getIteration**](DefaultApi.md#getiteration) | **GET** /api/v3/iterations/{iteration-public-id} | Get Iteration
[**getLabel**](DefaultApi.md#getlabel) | **GET** /api/v3/labels/{label-public-id} | Get Label
[**getLinkedFile**](DefaultApi.md#getlinkedfile) | **GET** /api/v3/linked-files/{linked-file-public-id} | Get Linked File
[**getMember**](DefaultApi.md#getmember) | **GET** /api/v3/members/{member-public-id} | Get Member
[**getMilestone**](DefaultApi.md#getmilestone) | **GET** /api/v3/milestones/{milestone-public-id} | Get Milestone
[**getProject**](DefaultApi.md#getproject) | **GET** /api/v3/projects/{project-public-id} | Get Project
[**getRepository**](DefaultApi.md#getrepository) | **GET** /api/v3/repositories/{repo-public-id} | Get Repository
[**getStory**](DefaultApi.md#getstory) | **GET** /api/v3/stories/{story-public-id} | Get Story
[**getStoryComment**](DefaultApi.md#getstorycomment) | **GET** /api/v3/stories/{story-public-id}/comments/{comment-public-id} | Get Story Comment
[**getStoryLink**](DefaultApi.md#getstorylink) | **GET** /api/v3/story-links/{story-link-public-id} | Get Story Link
[**getTask**](DefaultApi.md#gettask) | **GET** /api/v3/stories/{story-public-id}/tasks/{task-public-id} | Get Task
[**getWorkflow**](DefaultApi.md#getworkflow) | **GET** /api/v3/workflows/{workflow-public-id} | Get Workflow
[**listCategories**](DefaultApi.md#listcategories) | **GET** /api/v3/categories | List Categories
[**listCategoryMilestones**](DefaultApi.md#listcategorymilestones) | **GET** /api/v3/categories/{category-public-id}/milestones | List Category Milestones
[**listCustomFields**](DefaultApi.md#listcustomfields) | **GET** /api/v3/custom-fields | List Custom Fields
[**listEntityTemplates**](DefaultApi.md#listentitytemplates) | **GET** /api/v3/entity-templates | List Entity Templates
[**listEpicComments**](DefaultApi.md#listepiccomments) | **GET** /api/v3/epics/{epic-public-id}/comments | List Epic Comments
[**listEpicStories**](DefaultApi.md#listepicstories) | **GET** /api/v3/epics/{epic-public-id}/stories | List Epic Stories
[**listEpics**](DefaultApi.md#listepics) | **GET** /api/v3/epics | List Epics
[**listFiles**](DefaultApi.md#listfiles) | **GET** /api/v3/files | List Files
[**listGroupStories**](DefaultApi.md#listgroupstories) | **GET** /api/v3/groups/{group-public-id}/stories | List Group Stories
[**listGroups**](DefaultApi.md#listgroups) | **GET** /api/v3/groups | List Groups
[**listIterationStories**](DefaultApi.md#listiterationstories) | **GET** /api/v3/iterations/{iteration-public-id}/stories | List Iteration Stories
[**listIterations**](DefaultApi.md#listiterations) | **GET** /api/v3/iterations | List Iterations
[**listLabelEpics**](DefaultApi.md#listlabelepics) | **GET** /api/v3/labels/{label-public-id}/epics | List Label Epics
[**listLabelStories**](DefaultApi.md#listlabelstories) | **GET** /api/v3/labels/{label-public-id}/stories | List Label Stories
[**listLabels**](DefaultApi.md#listlabels) | **GET** /api/v3/labels | List Labels
[**listLinkedFiles**](DefaultApi.md#listlinkedfiles) | **GET** /api/v3/linked-files | List Linked Files
[**listMembers**](DefaultApi.md#listmembers) | **GET** /api/v3/members | List Members
[**listMilestoneEpics**](DefaultApi.md#listmilestoneepics) | **GET** /api/v3/milestones/{milestone-public-id}/epics | List Milestone Epics
[**listMilestones**](DefaultApi.md#listmilestones) | **GET** /api/v3/milestones | List Milestones
[**listProjects**](DefaultApi.md#listprojects) | **GET** /api/v3/projects | List Projects
[**listRepositories**](DefaultApi.md#listrepositories) | **GET** /api/v3/repositories | List Repositories
[**listStories**](DefaultApi.md#liststories) | **GET** /api/v3/projects/{project-public-id}/stories | List Stories
[**listStoryComment**](DefaultApi.md#liststorycomment) | **GET** /api/v3/stories/{story-public-id}/comments | List Story Comment
[**listWorkflows**](DefaultApi.md#listworkflows) | **GET** /api/v3/workflows | List Workflows
[**search**](DefaultApi.md#search) | **GET** /api/v3/search | Search
[**searchEpics**](DefaultApi.md#searchepics) | **GET** /api/v3/search/epics | Search Epics
[**searchIterations**](DefaultApi.md#searchiterations) | **GET** /api/v3/search/iterations | Search Iterations
[**searchMilestones**](DefaultApi.md#searchmilestones) | **GET** /api/v3/search/milestones | Search Milestones
[**searchStories**](DefaultApi.md#searchstories) | **GET** /api/v3/search/stories | Search Stories
[**searchStoriesOld**](DefaultApi.md#searchstoriesold) | **POST** /api/v3/stories/search | Search Stories (Old)
[**storyHistory**](DefaultApi.md#storyhistory) | **GET** /api/v3/stories/{story-public-id}/history | Story History
[**unlinkProductboardFromEpic**](DefaultApi.md#unlinkproductboardfromepic) | **POST** /api/v3/epics/{epic-public-id}/unlink-productboard | Unlink Productboard from Epic
[**updateCategory**](DefaultApi.md#updatecategory) | **PUT** /api/v3/categories/{category-public-id} | Update Category
[**updateCustomField**](DefaultApi.md#updatecustomfield) | **PUT** /api/v3/custom-fields/{custom-field-public-id} | Update Custom Field
[**updateEntityTemplate**](DefaultApi.md#updateentitytemplate) | **PUT** /api/v3/entity-templates/{entity-template-public-id} | Update Entity Template
[**updateEpic**](DefaultApi.md#updateepic) | **PUT** /api/v3/epics/{epic-public-id} | Update Epic
[**updateEpicComment**](DefaultApi.md#updateepiccomment) | **PUT** /api/v3/epics/{epic-public-id}/comments/{comment-public-id} | Update Epic Comment
[**updateFile**](DefaultApi.md#updatefile) | **PUT** /api/v3/files/{file-public-id} | Update File
[**updateGroup**](DefaultApi.md#updategroup) | **PUT** /api/v3/groups/{group-public-id} | Update Group
[**updateIteration**](DefaultApi.md#updateiteration) | **PUT** /api/v3/iterations/{iteration-public-id} | Update Iteration
[**updateLabel**](DefaultApi.md#updatelabel) | **PUT** /api/v3/labels/{label-public-id} | Update Label
[**updateLinkedFile**](DefaultApi.md#updatelinkedfile) | **PUT** /api/v3/linked-files/{linked-file-public-id} | Update Linked File
[**updateMilestone**](DefaultApi.md#updatemilestone) | **PUT** /api/v3/milestones/{milestone-public-id} | Update Milestone
[**updateMultipleStories**](DefaultApi.md#updatemultiplestories) | **PUT** /api/v3/stories/bulk | Update Multiple Stories
[**updateProject**](DefaultApi.md#updateproject) | **PUT** /api/v3/projects/{project-public-id} | Update Project
[**updateStory**](DefaultApi.md#updatestory) | **PUT** /api/v3/stories/{story-public-id} | Update Story
[**updateStoryComment**](DefaultApi.md#updatestorycomment) | **PUT** /api/v3/stories/{story-public-id}/comments/{comment-public-id} | Update Story Comment
[**updateStoryLink**](DefaultApi.md#updatestorylink) | **PUT** /api/v3/story-links/{story-link-public-id} | Update Story Link
[**updateTask**](DefaultApi.md#updatetask) | **PUT** /api/v3/stories/{story-public-id}/tasks/{task-public-id} | Update Task
[**uploadFiles**](DefaultApi.md#uploadfiles) | **POST** /api/v3/files | Upload Files

# **createCategory**
> \Timetoreply\Shortcut\Model\Category createCategory($body)

Create Category

Create Category allows you to create a new Category in Shortcut.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Timetoreply\Shortcut\Model\CreateCategory(); // \Timetoreply\Shortcut\Model\CreateCategory | 

try {
    $result = $apiInstance->createCategory($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Timetoreply\Shortcut\Model\CreateCategory**](../Model/CreateCategory.md)|  |

### Return type

[**\Timetoreply\Shortcut\Model\Category**](../Model/Category.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createEntityTemplate**
> \Timetoreply\Shortcut\Model\EntityTemplate createEntityTemplate($body)

Create Entity Template

Create a new entity template for the Workspace.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Timetoreply\Shortcut\Model\CreateEntityTemplate(); // \Timetoreply\Shortcut\Model\CreateEntityTemplate | Request paramaters for creating an entirely new entity template.

try {
    $result = $apiInstance->createEntityTemplate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createEntityTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Timetoreply\Shortcut\Model\CreateEntityTemplate**](../Model/CreateEntityTemplate.md)| Request paramaters for creating an entirely new entity template. |

### Return type

[**\Timetoreply\Shortcut\Model\EntityTemplate**](../Model/EntityTemplate.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createEpic**
> \Timetoreply\Shortcut\Model\Epic createEpic($body)

Create Epic

Create Epic allows you to create a new Epic in Shortcut.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Timetoreply\Shortcut\Model\CreateEpic(); // \Timetoreply\Shortcut\Model\CreateEpic | 

try {
    $result = $apiInstance->createEpic($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createEpic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Timetoreply\Shortcut\Model\CreateEpic**](../Model/CreateEpic.md)|  |

### Return type

[**\Timetoreply\Shortcut\Model\Epic**](../Model/Epic.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createEpicComment**
> \Timetoreply\Shortcut\Model\ThreadedComment createEpicComment($body, $epicPublicId)

Create Epic Comment

This endpoint allows you to create a threaded Comment on an Epic.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Timetoreply\Shortcut\Model\CreateEpicComment(); // \Timetoreply\Shortcut\Model\CreateEpicComment | 
$epicPublicId = 789; // int | The ID of the associated Epic.

try {
    $result = $apiInstance->createEpicComment($body, $epicPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createEpicComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Timetoreply\Shortcut\Model\CreateEpicComment**](../Model/CreateEpicComment.md)|  |
 **epicPublicId** | **int**| The ID of the associated Epic. |

### Return type

[**\Timetoreply\Shortcut\Model\ThreadedComment**](../Model/ThreadedComment.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createEpicCommentComment**
> \Timetoreply\Shortcut\Model\ThreadedComment createEpicCommentComment($body, $epicPublicId, $commentPublicId)

Create Epic Comment Comment

This endpoint allows you to create a nested Comment reply to an existing Epic Comment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Timetoreply\Shortcut\Model\CreateCommentComment(); // \Timetoreply\Shortcut\Model\CreateCommentComment | 
$epicPublicId = 789; // int | The ID of the associated Epic.
$commentPublicId = 789; // int | The ID of the parent Epic Comment.

try {
    $result = $apiInstance->createEpicCommentComment($body, $epicPublicId, $commentPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createEpicCommentComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Timetoreply\Shortcut\Model\CreateCommentComment**](../Model/CreateCommentComment.md)|  |
 **epicPublicId** | **int**| The ID of the associated Epic. |
 **commentPublicId** | **int**| The ID of the parent Epic Comment. |

### Return type

[**\Timetoreply\Shortcut\Model\ThreadedComment**](../Model/ThreadedComment.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createGroup**
> \Timetoreply\Shortcut\Model\Group createGroup($body)

Create Group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Timetoreply\Shortcut\Model\CreateGroup(); // \Timetoreply\Shortcut\Model\CreateGroup | 

try {
    $result = $apiInstance->createGroup($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Timetoreply\Shortcut\Model\CreateGroup**](../Model/CreateGroup.md)|  |

### Return type

[**\Timetoreply\Shortcut\Model\Group**](../Model/Group.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createIteration**
> \Timetoreply\Shortcut\Model\Iteration createIteration($body)

Create Iteration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Timetoreply\Shortcut\Model\CreateIteration(); // \Timetoreply\Shortcut\Model\CreateIteration | 

try {
    $result = $apiInstance->createIteration($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createIteration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Timetoreply\Shortcut\Model\CreateIteration**](../Model/CreateIteration.md)|  |

### Return type

[**\Timetoreply\Shortcut\Model\Iteration**](../Model/Iteration.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createLabel**
> \Timetoreply\Shortcut\Model\Label createLabel($body)

Create Label

Create Label allows you to create a new Label in Shortcut.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Timetoreply\Shortcut\Model\CreateLabelParams(); // \Timetoreply\Shortcut\Model\CreateLabelParams | Request parameters for creating a Label on a Shortcut Story.

try {
    $result = $apiInstance->createLabel($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createLabel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Timetoreply\Shortcut\Model\CreateLabelParams**](../Model/CreateLabelParams.md)| Request parameters for creating a Label on a Shortcut Story. |

### Return type

[**\Timetoreply\Shortcut\Model\Label**](../Model/Label.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createLinkedFile**
> \Timetoreply\Shortcut\Model\LinkedFile createLinkedFile($body)

Create Linked File

Create Linked File allows you to create a new Linked File in Shortcut.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Timetoreply\Shortcut\Model\CreateLinkedFile(); // \Timetoreply\Shortcut\Model\CreateLinkedFile | 

try {
    $result = $apiInstance->createLinkedFile($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createLinkedFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Timetoreply\Shortcut\Model\CreateLinkedFile**](../Model/CreateLinkedFile.md)|  |

### Return type

[**\Timetoreply\Shortcut\Model\LinkedFile**](../Model/LinkedFile.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createMilestone**
> \Timetoreply\Shortcut\Model\Milestone createMilestone($body)

Create Milestone

Create Milestone allows you to create a new Milestone in Shortcut.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Timetoreply\Shortcut\Model\CreateMilestone(); // \Timetoreply\Shortcut\Model\CreateMilestone | 

try {
    $result = $apiInstance->createMilestone($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createMilestone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Timetoreply\Shortcut\Model\CreateMilestone**](../Model/CreateMilestone.md)|  |

### Return type

[**\Timetoreply\Shortcut\Model\Milestone**](../Model/Milestone.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createMultipleStories**
> \Timetoreply\Shortcut\Model\StorySlim[] createMultipleStories($body)

Create Multiple Stories

Create Multiple Stories allows you to create multiple stories in a single request using the same syntax as [Create Story](https://developer.shortcut.com/api/rest/v3#create-story).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Timetoreply\Shortcut\Model\CreateStories(); // \Timetoreply\Shortcut\Model\CreateStories | 

try {
    $result = $apiInstance->createMultipleStories($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createMultipleStories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Timetoreply\Shortcut\Model\CreateStories**](../Model/CreateStories.md)|  |

### Return type

[**\Timetoreply\Shortcut\Model\StorySlim[]**](../Model/StorySlim.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createProject**
> \Timetoreply\Shortcut\Model\Project createProject($body)

Create Project

Create Project is used to create a new Shortcut Project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Timetoreply\Shortcut\Model\CreateProject(); // \Timetoreply\Shortcut\Model\CreateProject | 

try {
    $result = $apiInstance->createProject($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Timetoreply\Shortcut\Model\CreateProject**](../Model/CreateProject.md)|  |

### Return type

[**\Timetoreply\Shortcut\Model\Project**](../Model/Project.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createStory**
> \Timetoreply\Shortcut\Model\Story createStory($body)

Create Story

Create Story is used to add a new story to your Shortcut.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Timetoreply\Shortcut\Model\CreateStoryParams(); // \Timetoreply\Shortcut\Model\CreateStoryParams | Request parameters for creating a story.

try {
    $result = $apiInstance->createStory($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createStory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Timetoreply\Shortcut\Model\CreateStoryParams**](../Model/CreateStoryParams.md)| Request parameters for creating a story. |

### Return type

[**\Timetoreply\Shortcut\Model\Story**](../Model/Story.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createStoryComment**
> \Timetoreply\Shortcut\Model\StoryComment createStoryComment($body, $storyPublicId)

Create Story Comment

Create Comment allows you to create a Comment on any Story.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Timetoreply\Shortcut\Model\CreateStoryComment(); // \Timetoreply\Shortcut\Model\CreateStoryComment | 
$storyPublicId = 789; // int | The ID of the Story that the Comment is in.

try {
    $result = $apiInstance->createStoryComment($body, $storyPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createStoryComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Timetoreply\Shortcut\Model\CreateStoryComment**](../Model/CreateStoryComment.md)|  |
 **storyPublicId** | **int**| The ID of the Story that the Comment is in. |

### Return type

[**\Timetoreply\Shortcut\Model\StoryComment**](../Model/StoryComment.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createStoryLink**
> \Timetoreply\Shortcut\Model\StoryLink createStoryLink($body)

Create Story Link

Story Links (called Story Relationships in the UI) allow you create semantic relationships between two stories. The parameters read like an active voice grammatical sentence:  subject -> verb -> object.  The subject story acts on the object Story; the object story is the direct object of the sentence.  The subject story \"blocks\", \"duplicates\", or \"relates to\" the object story.  Examples: - \"story 5 blocks story 6” -- story 6 is now \"blocked\" until story 5 is moved to a Done workflow state. - \"story 2 duplicates story 1” -- Story 2 represents the same body of work as Story 1 (and should probably be archived). - \"story 7 relates to story 3”

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Timetoreply\Shortcut\Model\CreateStoryLink(); // \Timetoreply\Shortcut\Model\CreateStoryLink | 

try {
    $result = $apiInstance->createStoryLink($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createStoryLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Timetoreply\Shortcut\Model\CreateStoryLink**](../Model/CreateStoryLink.md)|  |

### Return type

[**\Timetoreply\Shortcut\Model\StoryLink**](../Model/StoryLink.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createStoryReaction**
> \Timetoreply\Shortcut\Model\StoryReaction[] createStoryReaction($body, $storyPublicId, $commentPublicId)

Create Story Reaction

Create a reaction to a story comment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Timetoreply\Shortcut\Model\CreateOrDeleteStoryReaction(); // \Timetoreply\Shortcut\Model\CreateOrDeleteStoryReaction | 
$storyPublicId = 789; // int | The ID of the Story that the Comment is in.
$commentPublicId = 789; // int | The ID of the Comment.

try {
    $result = $apiInstance->createStoryReaction($body, $storyPublicId, $commentPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createStoryReaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Timetoreply\Shortcut\Model\CreateOrDeleteStoryReaction**](../Model/CreateOrDeleteStoryReaction.md)|  |
 **storyPublicId** | **int**| The ID of the Story that the Comment is in. |
 **commentPublicId** | **int**| The ID of the Comment. |

### Return type

[**\Timetoreply\Shortcut\Model\StoryReaction[]**](../Model/StoryReaction.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createTask**
> \Timetoreply\Shortcut\Model\Task createTask($body, $storyPublicId)

Create Task

Create Task is used to create a new task in a Story.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Timetoreply\Shortcut\Model\CreateTask(); // \Timetoreply\Shortcut\Model\CreateTask | 
$storyPublicId = 789; // int | The ID of the Story that the Task will be in.

try {
    $result = $apiInstance->createTask($body, $storyPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Timetoreply\Shortcut\Model\CreateTask**](../Model/CreateTask.md)|  |
 **storyPublicId** | **int**| The ID of the Story that the Task will be in. |

### Return type

[**\Timetoreply\Shortcut\Model\Task**](../Model/Task.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCategory**
> deleteCategory($categoryPublicId)

Delete Category

Delete Category can be used to delete any Category.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$categoryPublicId = 789; // int | The unique ID of the Category.

try {
    $apiInstance->deleteCategory($categoryPublicId);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **categoryPublicId** | **int**| The unique ID of the Category. |

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCustomField**
> deleteCustomField($customFieldPublicId)

Delete Custom Field

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customFieldPublicId = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The unique ID of the CustomField.

try {
    $apiInstance->deleteCustomField($customFieldPublicId);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteCustomField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customFieldPublicId** | [**string**](../Model/.md)| The unique ID of the CustomField. |

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEntityTemplate**
> deleteEntityTemplate($entityTemplatePublicId)

Delete Entity Template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entityTemplatePublicId = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The unique ID of the entity template.

try {
    $apiInstance->deleteEntityTemplate($entityTemplatePublicId);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteEntityTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entityTemplatePublicId** | [**string**](../Model/.md)| The unique ID of the entity template. |

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEpic**
> deleteEpic($epicPublicId)

Delete Epic

Delete Epic can be used to delete the Epic. The only required parameter is Epic ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$epicPublicId = 789; // int | The unique ID of the Epic.

try {
    $apiInstance->deleteEpic($epicPublicId);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteEpic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **epicPublicId** | **int**| The unique ID of the Epic. |

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEpicComment**
> deleteEpicComment($epicPublicId, $commentPublicId)

Delete Epic Comment

This endpoint allows you to delete a Comment from an Epic.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$epicPublicId = 789; // int | The ID of the associated Epic.
$commentPublicId = 789; // int | The ID of the Comment.

try {
    $apiInstance->deleteEpicComment($epicPublicId, $commentPublicId);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteEpicComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **epicPublicId** | **int**| The ID of the associated Epic. |
 **commentPublicId** | **int**| The ID of the Comment. |

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFile**
> deleteFile($filePublicId)

Delete File

Delete File deletes a previously uploaded file.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filePublicId = 789; // int | The File’s unique ID.

try {
    $apiInstance->deleteFile($filePublicId);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filePublicId** | **int**| The File’s unique ID. |

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteIteration**
> deleteIteration($iterationPublicId)

Delete Iteration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$iterationPublicId = 789; // int | The unique ID of the Iteration.

try {
    $apiInstance->deleteIteration($iterationPublicId);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteIteration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **iterationPublicId** | **int**| The unique ID of the Iteration. |

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLabel**
> deleteLabel($labelPublicId)

Delete Label

Delete Label can be used to delete any Label.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$labelPublicId = 789; // int | The unique ID of the Label.

try {
    $apiInstance->deleteLabel($labelPublicId);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteLabel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **labelPublicId** | **int**| The unique ID of the Label. |

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLinkedFile**
> deleteLinkedFile($linkedFilePublicId)

Delete Linked File

Delete Linked File can be used to delete any previously attached Linked-File.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$linkedFilePublicId = 789; // int | The unique identifier of the linked file.

try {
    $apiInstance->deleteLinkedFile($linkedFilePublicId);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteLinkedFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **linkedFilePublicId** | **int**| The unique identifier of the linked file. |

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMilestone**
> deleteMilestone($milestonePublicId)

Delete Milestone

Delete Milestone can be used to delete any Milestone.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$milestonePublicId = 789; // int | The ID of the Milestone.

try {
    $apiInstance->deleteMilestone($milestonePublicId);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteMilestone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **milestonePublicId** | **int**| The ID of the Milestone. |

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMultipleStories**
> deleteMultipleStories($body)

Delete Multiple Stories

Delete Multiple Stories allows you to delete multiple archived stories at once.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Timetoreply\Shortcut\Model\DeleteStories(); // \Timetoreply\Shortcut\Model\DeleteStories | 

try {
    $apiInstance->deleteMultipleStories($body);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteMultipleStories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Timetoreply\Shortcut\Model\DeleteStories**](../Model/DeleteStories.md)|  |

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProject**
> deleteProject($projectPublicId)

Delete Project

Delete Project can be used to delete a Project. Projects can only be deleted if all associated Stories are moved or deleted. In the case that the Project cannot be deleted, you will receive a 422 response.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectPublicId = 789; // int | The unique ID of the Project.

try {
    $apiInstance->deleteProject($projectPublicId);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectPublicId** | **int**| The unique ID of the Project. |

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteStory**
> deleteStory($storyPublicId)

Delete Story

Delete Story can be used to delete any Story.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storyPublicId = 789; // int | The ID of the Story.

try {
    $apiInstance->deleteStory($storyPublicId);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteStory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storyPublicId** | **int**| The ID of the Story. |

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteStoryComment**
> deleteStoryComment($storyPublicId, $commentPublicId)

Delete Story Comment

Delete a Comment from any story.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storyPublicId = 789; // int | The ID of the Story that the Comment is in.
$commentPublicId = 789; // int | The ID of the Comment.

try {
    $apiInstance->deleteStoryComment($storyPublicId, $commentPublicId);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteStoryComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storyPublicId** | **int**| The ID of the Story that the Comment is in. |
 **commentPublicId** | **int**| The ID of the Comment. |

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteStoryLink**
> deleteStoryLink($storyLinkPublicId)

Delete Story Link

Removes the relationship between the stories for the given Story Link.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storyLinkPublicId = 789; // int | The unique ID of the Story Link.

try {
    $apiInstance->deleteStoryLink($storyLinkPublicId);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteStoryLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storyLinkPublicId** | **int**| The unique ID of the Story Link. |

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteStoryReaction**
> deleteStoryReaction($body, $storyPublicId, $commentPublicId)

Delete Story Reaction

Delete a reaction from any story comment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Timetoreply\Shortcut\Model\CreateOrDeleteStoryReaction(); // \Timetoreply\Shortcut\Model\CreateOrDeleteStoryReaction | 
$storyPublicId = 789; // int | The ID of the Story that the Comment is in.
$commentPublicId = 789; // int | The ID of the Comment.

try {
    $apiInstance->deleteStoryReaction($body, $storyPublicId, $commentPublicId);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteStoryReaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Timetoreply\Shortcut\Model\CreateOrDeleteStoryReaction**](../Model/CreateOrDeleteStoryReaction.md)|  |
 **storyPublicId** | **int**| The ID of the Story that the Comment is in. |
 **commentPublicId** | **int**| The ID of the Comment. |

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTask**
> deleteTask($storyPublicId, $taskPublicId)

Delete Task

Delete Task can be used to delete any previously created Task on a Story.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storyPublicId = 789; // int | The unique ID of the Story this Task is associated with.
$taskPublicId = 789; // int | The unique ID of the Task.

try {
    $apiInstance->deleteTask($storyPublicId, $taskPublicId);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storyPublicId** | **int**| The unique ID of the Story this Task is associated with. |
 **taskPublicId** | **int**| The unique ID of the Task. |

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **disableGroups**
> disableGroups()

Disable Groups

Disables Groups for the current workspace2

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->disableGroups();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->disableGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **disableIterations**
> disableIterations()

Disable Iterations

Disables Iterations for the current workspace

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->disableIterations();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->disableIterations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **disableStoryTemplates**
> disableStoryTemplates()

Disable Story Templates

Disables the Story Template feature for the Workspace.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->disableStoryTemplates();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->disableStoryTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enableGroups**
> enableGroups()

Enable Groups

Enables Groups for the current workspace2

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->enableGroups();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->enableGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enableIterations**
> enableIterations()

Enable Iterations

Enables Iterations for the current workspace

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->enableIterations();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->enableIterations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enableStoryTemplates**
> enableStoryTemplates()

Enable Story Templates

Enables the Story Template feature for the Workspace.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->enableStoryTemplates();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->enableStoryTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCategory**
> \Timetoreply\Shortcut\Model\Category getCategory($categoryPublicId)

Get Category

Get Category returns information about the selected Category.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$categoryPublicId = 789; // int | The unique ID of the Category.

try {
    $result = $apiInstance->getCategory($categoryPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **categoryPublicId** | **int**| The unique ID of the Category. |

### Return type

[**\Timetoreply\Shortcut\Model\Category**](../Model/Category.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCurrentMemberInfo**
> \Timetoreply\Shortcut\Model\MemberInfo getCurrentMemberInfo()

Get Current Member Info

Returns information about the authenticated member.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCurrentMemberInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCurrentMemberInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Timetoreply\Shortcut\Model\MemberInfo**](../Model/MemberInfo.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomField**
> \Timetoreply\Shortcut\Model\CustomField getCustomField($customFieldPublicId)

Get Custom Field

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customFieldPublicId = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The unique ID of the CustomField.

try {
    $result = $apiInstance->getCustomField($customFieldPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCustomField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customFieldPublicId** | [**string**](../Model/.md)| The unique ID of the CustomField. |

### Return type

[**\Timetoreply\Shortcut\Model\CustomField**](../Model/CustomField.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEntityTemplate**
> \Timetoreply\Shortcut\Model\EntityTemplate getEntityTemplate($entityTemplatePublicId)

Get Entity Template

Get Entity Template returns information about a given entity template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entityTemplatePublicId = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The unique ID of the entity template.

try {
    $result = $apiInstance->getEntityTemplate($entityTemplatePublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getEntityTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entityTemplatePublicId** | [**string**](../Model/.md)| The unique ID of the entity template. |

### Return type

[**\Timetoreply\Shortcut\Model\EntityTemplate**](../Model/EntityTemplate.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEpic**
> \Timetoreply\Shortcut\Model\Epic getEpic($epicPublicId)

Get Epic

Get Epic returns information about the selected Epic.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$epicPublicId = 789; // int | The unique ID of the Epic.

try {
    $result = $apiInstance->getEpic($epicPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getEpic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **epicPublicId** | **int**| The unique ID of the Epic. |

### Return type

[**\Timetoreply\Shortcut\Model\Epic**](../Model/Epic.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEpicComment**
> \Timetoreply\Shortcut\Model\ThreadedComment getEpicComment($epicPublicId, $commentPublicId)

Get Epic Comment

This endpoint returns information about the selected Epic Comment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$epicPublicId = 789; // int | The ID of the associated Epic.
$commentPublicId = 789; // int | The ID of the Comment.

try {
    $result = $apiInstance->getEpicComment($epicPublicId, $commentPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getEpicComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **epicPublicId** | **int**| The ID of the associated Epic. |
 **commentPublicId** | **int**| The ID of the Comment. |

### Return type

[**\Timetoreply\Shortcut\Model\ThreadedComment**](../Model/ThreadedComment.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEpicWorkflow**
> \Timetoreply\Shortcut\Model\EpicWorkflow getEpicWorkflow()

Get Epic Workflow

Returns the Epic Workflow for the Workspace.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getEpicWorkflow();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getEpicWorkflow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Timetoreply\Shortcut\Model\EpicWorkflow**](../Model/EpicWorkflow.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExternalLinkStories**
> \Timetoreply\Shortcut\Model\StorySlim[] getExternalLinkStories($body)

Get External Link Stories

Get Stories which have a given External Link associated with them.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Timetoreply\Shortcut\Model\GetExternalLinkStoriesParams(); // \Timetoreply\Shortcut\Model\GetExternalLinkStoriesParams | 

try {
    $result = $apiInstance->getExternalLinkStories($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getExternalLinkStories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Timetoreply\Shortcut\Model\GetExternalLinkStoriesParams**](../Model/GetExternalLinkStoriesParams.md)|  |

### Return type

[**\Timetoreply\Shortcut\Model\StorySlim[]**](../Model/StorySlim.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFile**
> \Timetoreply\Shortcut\Model\UploadedFile getFile($filePublicId)

Get File

Get File returns information about the selected UploadedFile.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filePublicId = 789; // int | The File’s unique ID.

try {
    $result = $apiInstance->getFile($filePublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filePublicId** | **int**| The File’s unique ID. |

### Return type

[**\Timetoreply\Shortcut\Model\UploadedFile**](../Model/UploadedFile.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroup**
> \Timetoreply\Shortcut\Model\Group getGroup($groupPublicId)

Get Group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupPublicId = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The unique ID of the Group.

try {
    $result = $apiInstance->getGroup($groupPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupPublicId** | [**string**](../Model/.md)| The unique ID of the Group. |

### Return type

[**\Timetoreply\Shortcut\Model\Group**](../Model/Group.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIteration**
> \Timetoreply\Shortcut\Model\Iteration getIteration($iterationPublicId)

Get Iteration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$iterationPublicId = 789; // int | The unique ID of the Iteration.

try {
    $result = $apiInstance->getIteration($iterationPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getIteration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **iterationPublicId** | **int**| The unique ID of the Iteration. |

### Return type

[**\Timetoreply\Shortcut\Model\Iteration**](../Model/Iteration.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLabel**
> \Timetoreply\Shortcut\Model\Label getLabel($labelPublicId)

Get Label

Get Label returns information about the selected Label.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$labelPublicId = 789; // int | The unique ID of the Label.

try {
    $result = $apiInstance->getLabel($labelPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getLabel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **labelPublicId** | **int**| The unique ID of the Label. |

### Return type

[**\Timetoreply\Shortcut\Model\Label**](../Model/Label.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLinkedFile**
> \Timetoreply\Shortcut\Model\LinkedFile getLinkedFile($linkedFilePublicId)

Get Linked File

Get File returns information about the selected Linked File.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$linkedFilePublicId = 789; // int | The unique identifier of the linked file.

try {
    $result = $apiInstance->getLinkedFile($linkedFilePublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getLinkedFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **linkedFilePublicId** | **int**| The unique identifier of the linked file. |

### Return type

[**\Timetoreply\Shortcut\Model\LinkedFile**](../Model/LinkedFile.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMember**
> \Timetoreply\Shortcut\Model\Member getMember($body, $memberPublicId)

Get Member

Returns information about a Member.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Timetoreply\Shortcut\Model\GetMember(); // \Timetoreply\Shortcut\Model\GetMember | 
$memberPublicId = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The Member's unique ID.

try {
    $result = $apiInstance->getMember($body, $memberPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Timetoreply\Shortcut\Model\GetMember**](../Model/GetMember.md)|  |
 **memberPublicId** | [**string**](../Model/.md)| The Member&#x27;s unique ID. |

### Return type

[**\Timetoreply\Shortcut\Model\Member**](../Model/Member.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMilestone**
> \Timetoreply\Shortcut\Model\Milestone getMilestone($milestonePublicId)

Get Milestone

Get Milestone returns information about a chosen Milestone.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$milestonePublicId = 789; // int | The ID of the Milestone.

try {
    $result = $apiInstance->getMilestone($milestonePublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getMilestone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **milestonePublicId** | **int**| The ID of the Milestone. |

### Return type

[**\Timetoreply\Shortcut\Model\Milestone**](../Model/Milestone.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProject**
> \Timetoreply\Shortcut\Model\Project getProject($projectPublicId)

Get Project

Get Project returns information about the selected Project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectPublicId = 789; // int | The unique ID of the Project.

try {
    $result = $apiInstance->getProject($projectPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectPublicId** | **int**| The unique ID of the Project. |

### Return type

[**\Timetoreply\Shortcut\Model\Project**](../Model/Project.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepository**
> \Timetoreply\Shortcut\Model\Repository getRepository($repoPublicId)

Get Repository

Get Repository returns information about the selected Repository.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$repoPublicId = 789; // int | The unique ID of the Repository.

try {
    $result = $apiInstance->getRepository($repoPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getRepository: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repoPublicId** | **int**| The unique ID of the Repository. |

### Return type

[**\Timetoreply\Shortcut\Model\Repository**](../Model/Repository.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStory**
> \Timetoreply\Shortcut\Model\Story getStory($storyPublicId)

Get Story

Get Story returns information about a chosen Story.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storyPublicId = 789; // int | The ID of the Story.

try {
    $result = $apiInstance->getStory($storyPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getStory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storyPublicId** | **int**| The ID of the Story. |

### Return type

[**\Timetoreply\Shortcut\Model\Story**](../Model/Story.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoryComment**
> \Timetoreply\Shortcut\Model\StoryComment getStoryComment($storyPublicId, $commentPublicId)

Get Story Comment

Get Comment is used to get Comment information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storyPublicId = 789; // int | The ID of the Story that the Comment is in.
$commentPublicId = 789; // int | The ID of the Comment.

try {
    $result = $apiInstance->getStoryComment($storyPublicId, $commentPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getStoryComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storyPublicId** | **int**| The ID of the Story that the Comment is in. |
 **commentPublicId** | **int**| The ID of the Comment. |

### Return type

[**\Timetoreply\Shortcut\Model\StoryComment**](../Model/StoryComment.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoryLink**
> \Timetoreply\Shortcut\Model\StoryLink getStoryLink($storyLinkPublicId)

Get Story Link

Returns the stories and their relationship for the given Story Link.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storyLinkPublicId = 789; // int | The unique ID of the Story Link.

try {
    $result = $apiInstance->getStoryLink($storyLinkPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getStoryLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storyLinkPublicId** | **int**| The unique ID of the Story Link. |

### Return type

[**\Timetoreply\Shortcut\Model\StoryLink**](../Model/StoryLink.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTask**
> \Timetoreply\Shortcut\Model\Task getTask($storyPublicId, $taskPublicId)

Get Task

Returns information about a chosen Task.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storyPublicId = 789; // int | The unique ID of the Story this Task is associated with.
$taskPublicId = 789; // int | The unique ID of the Task.

try {
    $result = $apiInstance->getTask($storyPublicId, $taskPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storyPublicId** | **int**| The unique ID of the Story this Task is associated with. |
 **taskPublicId** | **int**| The unique ID of the Task. |

### Return type

[**\Timetoreply\Shortcut\Model\Task**](../Model/Task.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWorkflow**
> \Timetoreply\Shortcut\Model\Workflow getWorkflow($workflowPublicId)

Get Workflow

Get Workflow returns information about a chosen Workflow.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workflowPublicId = 789; // int | The ID of the Workflow.

try {
    $result = $apiInstance->getWorkflow($workflowPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getWorkflow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **workflowPublicId** | **int**| The ID of the Workflow. |

### Return type

[**\Timetoreply\Shortcut\Model\Workflow**](../Model/Workflow.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCategories**
> \Timetoreply\Shortcut\Model\Category[] listCategories()

List Categories

List Categories returns a list of all Categories and their attributes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listCategories();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Timetoreply\Shortcut\Model\Category[]**](../Model/Category.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCategoryMilestones**
> \Timetoreply\Shortcut\Model\Milestone[] listCategoryMilestones($categoryPublicId)

List Category Milestones

List Category Milestones returns a list of all Milestones with the Category.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$categoryPublicId = 789; // int | The unique ID of the Category.

try {
    $result = $apiInstance->listCategoryMilestones($categoryPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listCategoryMilestones: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **categoryPublicId** | **int**| The unique ID of the Category. |

### Return type

[**\Timetoreply\Shortcut\Model\Milestone[]**](../Model/Milestone.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCustomFields**
> \Timetoreply\Shortcut\Model\CustomField[] listCustomFields()

List Custom Fields

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listCustomFields();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Timetoreply\Shortcut\Model\CustomField[]**](../Model/CustomField.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listEntityTemplates**
> \Timetoreply\Shortcut\Model\EntityTemplate[] listEntityTemplates()

List Entity Templates

List all the entity templates for the Workspace.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listEntityTemplates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listEntityTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Timetoreply\Shortcut\Model\EntityTemplate[]**](../Model/EntityTemplate.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listEpicComments**
> \Timetoreply\Shortcut\Model\ThreadedComment[] listEpicComments($epicPublicId)

List Epic Comments

Get a list of all Comments on an Epic.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$epicPublicId = 789; // int | The unique ID of the Epic.

try {
    $result = $apiInstance->listEpicComments($epicPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listEpicComments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **epicPublicId** | **int**| The unique ID of the Epic. |

### Return type

[**\Timetoreply\Shortcut\Model\ThreadedComment[]**](../Model/ThreadedComment.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listEpicStories**
> \Timetoreply\Shortcut\Model\StorySlim[] listEpicStories($body, $epicPublicId)

List Epic Stories

Get a list of all Stories in an Epic.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Timetoreply\Shortcut\Model\GetEpicStories(); // \Timetoreply\Shortcut\Model\GetEpicStories | 
$epicPublicId = 789; // int | The unique ID of the Epic.

try {
    $result = $apiInstance->listEpicStories($body, $epicPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listEpicStories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Timetoreply\Shortcut\Model\GetEpicStories**](../Model/GetEpicStories.md)|  |
 **epicPublicId** | **int**| The unique ID of the Epic. |

### Return type

[**\Timetoreply\Shortcut\Model\StorySlim[]**](../Model/StorySlim.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listEpics**
> \Timetoreply\Shortcut\Model\EpicSlim[] listEpics($body)

List Epics

List Epics returns a list of all Epics and their attributes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Timetoreply\Shortcut\Model\ListEpics(); // \Timetoreply\Shortcut\Model\ListEpics | 

try {
    $result = $apiInstance->listEpics($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listEpics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Timetoreply\Shortcut\Model\ListEpics**](../Model/ListEpics.md)|  |

### Return type

[**\Timetoreply\Shortcut\Model\EpicSlim[]**](../Model/EpicSlim.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listFiles**
> \Timetoreply\Shortcut\Model\UploadedFile[] listFiles()

List Files

List Files returns a list of all UploadedFiles in the workspace.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listFiles();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Timetoreply\Shortcut\Model\UploadedFile[]**](../Model/UploadedFile.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listGroupStories**
> \Timetoreply\Shortcut\Model\StorySlim[] listGroupStories($body, $groupPublicId)

List Group Stories

List the Stories assigned to the Group. (By default, limited to 1,000).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Timetoreply\Shortcut\Model\ListGroupStories(); // \Timetoreply\Shortcut\Model\ListGroupStories | 
$groupPublicId = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The unique ID of the Group.

try {
    $result = $apiInstance->listGroupStories($body, $groupPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listGroupStories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Timetoreply\Shortcut\Model\ListGroupStories**](../Model/ListGroupStories.md)|  |
 **groupPublicId** | [**string**](../Model/.md)| The unique ID of the Group. |

### Return type

[**\Timetoreply\Shortcut\Model\StorySlim[]**](../Model/StorySlim.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listGroups**
> \Timetoreply\Shortcut\Model\Group[] listGroups()

List Groups

A group in our API maps to a \"Team\" within the Shortcut Product. A Team is a collection of Users that can be associated to Stories, Epics, and Iterations within Shortcut.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listGroups();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Timetoreply\Shortcut\Model\Group[]**](../Model/Group.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listIterationStories**
> \Timetoreply\Shortcut\Model\StorySlim[] listIterationStories($body, $iterationPublicId)

List Iteration Stories

Get a list of all Stories in an Iteration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Timetoreply\Shortcut\Model\GetIterationStories(); // \Timetoreply\Shortcut\Model\GetIterationStories | 
$iterationPublicId = 789; // int | The unique ID of the Iteration.

try {
    $result = $apiInstance->listIterationStories($body, $iterationPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listIterationStories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Timetoreply\Shortcut\Model\GetIterationStories**](../Model/GetIterationStories.md)|  |
 **iterationPublicId** | **int**| The unique ID of the Iteration. |

### Return type

[**\Timetoreply\Shortcut\Model\StorySlim[]**](../Model/StorySlim.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listIterations**
> \Timetoreply\Shortcut\Model\IterationSlim[] listIterations()

List Iterations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listIterations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listIterations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Timetoreply\Shortcut\Model\IterationSlim[]**](../Model/IterationSlim.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listLabelEpics**
> \Timetoreply\Shortcut\Model\EpicSlim[] listLabelEpics($labelPublicId)

List Label Epics

List all of the Epics with the Label.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$labelPublicId = 789; // int | The unique ID of the Label.

try {
    $result = $apiInstance->listLabelEpics($labelPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listLabelEpics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **labelPublicId** | **int**| The unique ID of the Label. |

### Return type

[**\Timetoreply\Shortcut\Model\EpicSlim[]**](../Model/EpicSlim.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listLabelStories**
> \Timetoreply\Shortcut\Model\StorySlim[] listLabelStories($body, $labelPublicId)

List Label Stories

List all of the Stories with the Label.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Timetoreply\Shortcut\Model\GetLabelStories(); // \Timetoreply\Shortcut\Model\GetLabelStories | 
$labelPublicId = 789; // int | The unique ID of the Label.

try {
    $result = $apiInstance->listLabelStories($body, $labelPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listLabelStories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Timetoreply\Shortcut\Model\GetLabelStories**](../Model/GetLabelStories.md)|  |
 **labelPublicId** | **int**| The unique ID of the Label. |

### Return type

[**\Timetoreply\Shortcut\Model\StorySlim[]**](../Model/StorySlim.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listLabels**
> \Timetoreply\Shortcut\Model\Label[] listLabels($body)

List Labels

List Labels returns a list of all Labels and their attributes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Timetoreply\Shortcut\Model\ListLabels(); // \Timetoreply\Shortcut\Model\ListLabels | 

try {
    $result = $apiInstance->listLabels($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listLabels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Timetoreply\Shortcut\Model\ListLabels**](../Model/ListLabels.md)|  |

### Return type

[**\Timetoreply\Shortcut\Model\Label[]**](../Model/Label.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listLinkedFiles**
> \Timetoreply\Shortcut\Model\LinkedFile[] listLinkedFiles()

List Linked Files

List Linked Files returns a list of all Linked-Files and their attributes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listLinkedFiles();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listLinkedFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Timetoreply\Shortcut\Model\LinkedFile[]**](../Model/LinkedFile.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listMembers**
> \Timetoreply\Shortcut\Model\Member[] listMembers($body)

List Members

Returns information about members of the Workspace.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Timetoreply\Shortcut\Model\ListMembers(); // \Timetoreply\Shortcut\Model\ListMembers | 

try {
    $result = $apiInstance->listMembers($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Timetoreply\Shortcut\Model\ListMembers**](../Model/ListMembers.md)|  |

### Return type

[**\Timetoreply\Shortcut\Model\Member[]**](../Model/Member.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listMilestoneEpics**
> \Timetoreply\Shortcut\Model\EpicSlim[] listMilestoneEpics($milestonePublicId)

List Milestone Epics

List all of the Epics within the Milestone.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$milestonePublicId = 789; // int | The ID of the Milestone.

try {
    $result = $apiInstance->listMilestoneEpics($milestonePublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listMilestoneEpics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **milestonePublicId** | **int**| The ID of the Milestone. |

### Return type

[**\Timetoreply\Shortcut\Model\EpicSlim[]**](../Model/EpicSlim.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listMilestones**
> \Timetoreply\Shortcut\Model\Milestone[] listMilestones()

List Milestones

List Milestones returns a list of all Milestones and their attributes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listMilestones();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listMilestones: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Timetoreply\Shortcut\Model\Milestone[]**](../Model/Milestone.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listProjects**
> \Timetoreply\Shortcut\Model\Project[] listProjects()

List Projects

List Projects returns a list of all Projects and their attributes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listProjects();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listProjects: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Timetoreply\Shortcut\Model\Project[]**](../Model/Project.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listRepositories**
> \Timetoreply\Shortcut\Model\Repository[] listRepositories()

List Repositories

List Repositories returns a list of all Repositories and their attributes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listRepositories();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listRepositories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Timetoreply\Shortcut\Model\Repository[]**](../Model/Repository.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listStories**
> \Timetoreply\Shortcut\Model\StorySlim[] listStories($body, $projectPublicId)

List Stories

List Stories returns a list of all Stories in a selected Project and their attributes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Timetoreply\Shortcut\Model\GetProjectStories(); // \Timetoreply\Shortcut\Model\GetProjectStories | 
$projectPublicId = 789; // int | The unique ID of the Project.

try {
    $result = $apiInstance->listStories($body, $projectPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listStories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Timetoreply\Shortcut\Model\GetProjectStories**](../Model/GetProjectStories.md)|  |
 **projectPublicId** | **int**| The unique ID of the Project. |

### Return type

[**\Timetoreply\Shortcut\Model\StorySlim[]**](../Model/StorySlim.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listStoryComment**
> \Timetoreply\Shortcut\Model\StoryComment[] listStoryComment($storyPublicId)

List Story Comment

Lists Comments associated with a Story

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storyPublicId = 789; // int | The ID of the Story that the Comment is in.

try {
    $result = $apiInstance->listStoryComment($storyPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listStoryComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storyPublicId** | **int**| The ID of the Story that the Comment is in. |

### Return type

[**\Timetoreply\Shortcut\Model\StoryComment[]**](../Model/StoryComment.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listWorkflows**
> \Timetoreply\Shortcut\Model\Workflow[] listWorkflows()

List Workflows

Returns a list of all Workflows in the Workspace.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorkflows();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listWorkflows: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Timetoreply\Shortcut\Model\Workflow[]**](../Model/Workflow.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **search**
> \Timetoreply\Shortcut\Model\SearchResults search($body)

Search

Search lets you search Epics and Stories based on desired parameters. Since ordering of the results can change over time (due to search ranking decay, new Epics and Stories being created), the `next` value from the previous response can be used as the path and query string for the next page to ensure stable ordering.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Timetoreply\Shortcut\Model\Search(); // \Timetoreply\Shortcut\Model\Search | 

try {
    $result = $apiInstance->search($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->search: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Timetoreply\Shortcut\Model\Search**](../Model/Search.md)|  |

### Return type

[**\Timetoreply\Shortcut\Model\SearchResults**](../Model/SearchResults.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchEpics**
> \Timetoreply\Shortcut\Model\EpicSearchResults searchEpics($body)

Search Epics

Search Epics lets you search Epics based on desired parameters. Since ordering of stories can change over time (due to search ranking decay, new Epics being created), the `next` value from the previous response can be used as the path and query string for the next page to ensure stable ordering.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Timetoreply\Shortcut\Model\Search(); // \Timetoreply\Shortcut\Model\Search | 

try {
    $result = $apiInstance->searchEpics($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->searchEpics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Timetoreply\Shortcut\Model\Search**](../Model/Search.md)|  |

### Return type

[**\Timetoreply\Shortcut\Model\EpicSearchResults**](../Model/EpicSearchResults.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchIterations**
> \Timetoreply\Shortcut\Model\IterationSearchResults searchIterations($body)

Search Iterations

Search Iterations lets you search Iterations based on desired parameters. Since ordering of results can change over time (due to search ranking decay, new Iterations being created), the `next` value from the previous response can be used as the path and query string for the next page to ensure stable ordering.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Timetoreply\Shortcut\Model\Search(); // \Timetoreply\Shortcut\Model\Search | 

try {
    $result = $apiInstance->searchIterations($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->searchIterations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Timetoreply\Shortcut\Model\Search**](../Model/Search.md)|  |

### Return type

[**\Timetoreply\Shortcut\Model\IterationSearchResults**](../Model/IterationSearchResults.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchMilestones**
> \Timetoreply\Shortcut\Model\MilestoneSearchResults searchMilestones($body)

Search Milestones

Search Milestones lets you search Milestones based on desired parameters. Since ordering of results can change over time (due to search ranking decay, new Milestones being created), the `next` value from the previous response can be used as the path and query string for the next page to ensure stable ordering.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Timetoreply\Shortcut\Model\Search(); // \Timetoreply\Shortcut\Model\Search | 

try {
    $result = $apiInstance->searchMilestones($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->searchMilestones: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Timetoreply\Shortcut\Model\Search**](../Model/Search.md)|  |

### Return type

[**\Timetoreply\Shortcut\Model\MilestoneSearchResults**](../Model/MilestoneSearchResults.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchStories**
> \Timetoreply\Shortcut\Model\StorySearchResults searchStories($body)

Search Stories

Search Stories lets you search Stories based on desired parameters. Since ordering of stories can change over time (due to search ranking decay, new stories being created), the `next` value from the previous response can be used as the path and query string for the next page to ensure stable ordering.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Timetoreply\Shortcut\Model\Search(); // \Timetoreply\Shortcut\Model\Search | 

try {
    $result = $apiInstance->searchStories($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->searchStories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Timetoreply\Shortcut\Model\Search**](../Model/Search.md)|  |

### Return type

[**\Timetoreply\Shortcut\Model\StorySearchResults**](../Model/StorySearchResults.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchStoriesOld**
> \Timetoreply\Shortcut\Model\StorySlim[] searchStoriesOld($body)

Search Stories (Old)

Search Stories lets you search Stories based on desired parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Timetoreply\Shortcut\Model\SearchStories(); // \Timetoreply\Shortcut\Model\SearchStories | 

try {
    $result = $apiInstance->searchStoriesOld($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->searchStoriesOld: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Timetoreply\Shortcut\Model\SearchStories**](../Model/SearchStories.md)|  |

### Return type

[**\Timetoreply\Shortcut\Model\StorySlim[]**](../Model/StorySlim.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storyHistory**
> \Timetoreply\Shortcut\Model\History[] storyHistory($storyPublicId)

Story History

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storyPublicId = 789; // int | The ID of the Story.

try {
    $result = $apiInstance->storyHistory($storyPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->storyHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storyPublicId** | **int**| The ID of the Story. |

### Return type

[**\Timetoreply\Shortcut\Model\History[]**](../Model/History.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unlinkProductboardFromEpic**
> unlinkProductboardFromEpic($epicPublicId)

Unlink Productboard from Epic

This endpoint allows you to unlink a productboard epic.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$epicPublicId = 789; // int | The unique ID of the Epic.

try {
    $apiInstance->unlinkProductboardFromEpic($epicPublicId);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->unlinkProductboardFromEpic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **epicPublicId** | **int**| The unique ID of the Epic. |

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCategory**
> \Timetoreply\Shortcut\Model\Category updateCategory($body, $categoryPublicId)

Update Category

Update Category allows you to replace a Category name with another name. If you try to name a Category something that already exists, you will receive a 422 response.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Timetoreply\Shortcut\Model\UpdateCategory(); // \Timetoreply\Shortcut\Model\UpdateCategory | 
$categoryPublicId = 789; // int | The unique ID of the Category you wish to update.

try {
    $result = $apiInstance->updateCategory($body, $categoryPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Timetoreply\Shortcut\Model\UpdateCategory**](../Model/UpdateCategory.md)|  |
 **categoryPublicId** | **int**| The unique ID of the Category you wish to update. |

### Return type

[**\Timetoreply\Shortcut\Model\Category**](../Model/Category.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomField**
> \Timetoreply\Shortcut\Model\CustomField updateCustomField($body, $customFieldPublicId)

Update Custom Field

Update Custom Field can be used to update the definition of a Custom Field. The order of items in the 'values' collection is interpreted to be their ascending sort order.To delete an existing enum value, simply omit it from the 'values' collection. New enum values may be created inline by including an object in the 'values' collection having a 'value' entry with no 'id' (eg. {'value': 'myNewValue', 'color_key': 'green'}).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Timetoreply\Shortcut\Model\UpdateCustomField(); // \Timetoreply\Shortcut\Model\UpdateCustomField | 
$customFieldPublicId = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The unique ID of the CustomField.

try {
    $result = $apiInstance->updateCustomField($body, $customFieldPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateCustomField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Timetoreply\Shortcut\Model\UpdateCustomField**](../Model/UpdateCustomField.md)|  |
 **customFieldPublicId** | [**string**](../Model/.md)| The unique ID of the CustomField. |

### Return type

[**\Timetoreply\Shortcut\Model\CustomField**](../Model/CustomField.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEntityTemplate**
> \Timetoreply\Shortcut\Model\EntityTemplate updateEntityTemplate($body, $entityTemplatePublicId)

Update Entity Template

Update an entity template's name or its contents.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Timetoreply\Shortcut\Model\UpdateEntityTemplate(); // \Timetoreply\Shortcut\Model\UpdateEntityTemplate | Request parameters for changing either a template's name or any of
  the attributes it is designed to pre-populate.
$entityTemplatePublicId = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The unique ID of the template to be updated.

try {
    $result = $apiInstance->updateEntityTemplate($body, $entityTemplatePublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateEntityTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Timetoreply\Shortcut\Model\UpdateEntityTemplate**](../Model/UpdateEntityTemplate.md)| Request parameters for changing either a template&#x27;s name or any of
  the attributes it is designed to pre-populate. |
 **entityTemplatePublicId** | [**string**](../Model/.md)| The unique ID of the template to be updated. |

### Return type

[**\Timetoreply\Shortcut\Model\EntityTemplate**](../Model/EntityTemplate.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEpic**
> \Timetoreply\Shortcut\Model\Epic updateEpic($body, $epicPublicId)

Update Epic

Update Epic can be used to update numerous fields in the Epic. The only required parameter is Epic ID, which can be found in the Shortcut UI.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Timetoreply\Shortcut\Model\UpdateEpic(); // \Timetoreply\Shortcut\Model\UpdateEpic | 
$epicPublicId = 789; // int | The unique ID of the Epic.

try {
    $result = $apiInstance->updateEpic($body, $epicPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateEpic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Timetoreply\Shortcut\Model\UpdateEpic**](../Model/UpdateEpic.md)|  |
 **epicPublicId** | **int**| The unique ID of the Epic. |

### Return type

[**\Timetoreply\Shortcut\Model\Epic**](../Model/Epic.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEpicComment**
> \Timetoreply\Shortcut\Model\ThreadedComment updateEpicComment($body, $epicPublicId, $commentPublicId)

Update Epic Comment

This endpoint allows you to update a threaded Comment on an Epic.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Timetoreply\Shortcut\Model\UpdateComment(); // \Timetoreply\Shortcut\Model\UpdateComment | 
$epicPublicId = 789; // int | The ID of the associated Epic.
$commentPublicId = 789; // int | The ID of the Comment.

try {
    $result = $apiInstance->updateEpicComment($body, $epicPublicId, $commentPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateEpicComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Timetoreply\Shortcut\Model\UpdateComment**](../Model/UpdateComment.md)|  |
 **epicPublicId** | **int**| The ID of the associated Epic. |
 **commentPublicId** | **int**| The ID of the Comment. |

### Return type

[**\Timetoreply\Shortcut\Model\ThreadedComment**](../Model/ThreadedComment.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFile**
> \Timetoreply\Shortcut\Model\UploadedFile updateFile($body, $filePublicId)

Update File

Update File updates the properties of an UploadedFile (but not its content).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Timetoreply\Shortcut\Model\UpdateFile(); // \Timetoreply\Shortcut\Model\UpdateFile | 
$filePublicId = 789; // int | The unique ID assigned to the file in Shortcut.

try {
    $result = $apiInstance->updateFile($body, $filePublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Timetoreply\Shortcut\Model\UpdateFile**](../Model/UpdateFile.md)|  |
 **filePublicId** | **int**| The unique ID assigned to the file in Shortcut. |

### Return type

[**\Timetoreply\Shortcut\Model\UploadedFile**](../Model/UploadedFile.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateGroup**
> \Timetoreply\Shortcut\Model\Group updateGroup($body, $groupPublicId)

Update Group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Timetoreply\Shortcut\Model\UpdateGroup(); // \Timetoreply\Shortcut\Model\UpdateGroup | 
$groupPublicId = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The unique ID of the Group.

try {
    $result = $apiInstance->updateGroup($body, $groupPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Timetoreply\Shortcut\Model\UpdateGroup**](../Model/UpdateGroup.md)|  |
 **groupPublicId** | [**string**](../Model/.md)| The unique ID of the Group. |

### Return type

[**\Timetoreply\Shortcut\Model\Group**](../Model/Group.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateIteration**
> \Timetoreply\Shortcut\Model\Iteration updateIteration($body, $iterationPublicId)

Update Iteration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Timetoreply\Shortcut\Model\UpdateIteration(); // \Timetoreply\Shortcut\Model\UpdateIteration | 
$iterationPublicId = 789; // int | The unique ID of the Iteration.

try {
    $result = $apiInstance->updateIteration($body, $iterationPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateIteration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Timetoreply\Shortcut\Model\UpdateIteration**](../Model/UpdateIteration.md)|  |
 **iterationPublicId** | **int**| The unique ID of the Iteration. |

### Return type

[**\Timetoreply\Shortcut\Model\Iteration**](../Model/Iteration.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLabel**
> \Timetoreply\Shortcut\Model\Label updateLabel($body, $labelPublicId)

Update Label

Update Label allows you to replace a Label name with another name. If you try to name a Label something that already exists, you will receive a 422 response.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Timetoreply\Shortcut\Model\UpdateLabel(); // \Timetoreply\Shortcut\Model\UpdateLabel | 
$labelPublicId = 789; // int | The unique ID of the Label you wish to update.

try {
    $result = $apiInstance->updateLabel($body, $labelPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateLabel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Timetoreply\Shortcut\Model\UpdateLabel**](../Model/UpdateLabel.md)|  |
 **labelPublicId** | **int**| The unique ID of the Label you wish to update. |

### Return type

[**\Timetoreply\Shortcut\Model\Label**](../Model/Label.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLinkedFile**
> \Timetoreply\Shortcut\Model\LinkedFile updateLinkedFile($body, $linkedFilePublicId)

Update Linked File

Updated Linked File allows you to update properties of a previously attached Linked-File.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Timetoreply\Shortcut\Model\UpdateLinkedFile(); // \Timetoreply\Shortcut\Model\UpdateLinkedFile | 
$linkedFilePublicId = 789; // int | The unique identifier of the linked file.

try {
    $result = $apiInstance->updateLinkedFile($body, $linkedFilePublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateLinkedFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Timetoreply\Shortcut\Model\UpdateLinkedFile**](../Model/UpdateLinkedFile.md)|  |
 **linkedFilePublicId** | **int**| The unique identifier of the linked file. |

### Return type

[**\Timetoreply\Shortcut\Model\LinkedFile**](../Model/LinkedFile.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMilestone**
> \Timetoreply\Shortcut\Model\Milestone updateMilestone($body, $milestonePublicId)

Update Milestone

Update Milestone can be used to update Milestone properties.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Timetoreply\Shortcut\Model\UpdateMilestone(); // \Timetoreply\Shortcut\Model\UpdateMilestone | 
$milestonePublicId = 789; // int | The ID of the Milestone.

try {
    $result = $apiInstance->updateMilestone($body, $milestonePublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateMilestone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Timetoreply\Shortcut\Model\UpdateMilestone**](../Model/UpdateMilestone.md)|  |
 **milestonePublicId** | **int**| The ID of the Milestone. |

### Return type

[**\Timetoreply\Shortcut\Model\Milestone**](../Model/Milestone.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMultipleStories**
> \Timetoreply\Shortcut\Model\StorySlim[] updateMultipleStories($body)

Update Multiple Stories

Update Multiple Stories allows you to make changes to numerous stories at once.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Timetoreply\Shortcut\Model\UpdateStories(); // \Timetoreply\Shortcut\Model\UpdateStories | 

try {
    $result = $apiInstance->updateMultipleStories($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateMultipleStories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Timetoreply\Shortcut\Model\UpdateStories**](../Model/UpdateStories.md)|  |

### Return type

[**\Timetoreply\Shortcut\Model\StorySlim[]**](../Model/StorySlim.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProject**
> \Timetoreply\Shortcut\Model\Project updateProject($body, $projectPublicId)

Update Project

Update Project can be used to change properties of a Project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Timetoreply\Shortcut\Model\UpdateProject(); // \Timetoreply\Shortcut\Model\UpdateProject | 
$projectPublicId = 789; // int | The unique ID of the Project.

try {
    $result = $apiInstance->updateProject($body, $projectPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Timetoreply\Shortcut\Model\UpdateProject**](../Model/UpdateProject.md)|  |
 **projectPublicId** | **int**| The unique ID of the Project. |

### Return type

[**\Timetoreply\Shortcut\Model\Project**](../Model/Project.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateStory**
> \Timetoreply\Shortcut\Model\Story updateStory($body, $storyPublicId)

Update Story

Update Story can be used to update Story properties.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Timetoreply\Shortcut\Model\UpdateStory(); // \Timetoreply\Shortcut\Model\UpdateStory | 
$storyPublicId = 789; // int | The unique identifier of this story.

try {
    $result = $apiInstance->updateStory($body, $storyPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateStory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Timetoreply\Shortcut\Model\UpdateStory**](../Model/UpdateStory.md)|  |
 **storyPublicId** | **int**| The unique identifier of this story. |

### Return type

[**\Timetoreply\Shortcut\Model\Story**](../Model/Story.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateStoryComment**
> \Timetoreply\Shortcut\Model\StoryComment updateStoryComment($body, $storyPublicId, $commentPublicId)

Update Story Comment

Update Comment replaces the text of the existing Comment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Timetoreply\Shortcut\Model\UpdateStoryComment(); // \Timetoreply\Shortcut\Model\UpdateStoryComment | 
$storyPublicId = 789; // int | The ID of the Story that the Comment is in.
$commentPublicId = 789; // int | The ID of the Comment

try {
    $result = $apiInstance->updateStoryComment($body, $storyPublicId, $commentPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateStoryComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Timetoreply\Shortcut\Model\UpdateStoryComment**](../Model/UpdateStoryComment.md)|  |
 **storyPublicId** | **int**| The ID of the Story that the Comment is in. |
 **commentPublicId** | **int**| The ID of the Comment |

### Return type

[**\Timetoreply\Shortcut\Model\StoryComment**](../Model/StoryComment.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateStoryLink**
> \Timetoreply\Shortcut\Model\StoryLink updateStoryLink($body, $storyLinkPublicId)

Update Story Link

Updates the stories and/or the relationship for the given Story Link.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Timetoreply\Shortcut\Model\UpdateStoryLink(); // \Timetoreply\Shortcut\Model\UpdateStoryLink | 
$storyLinkPublicId = 789; // int | The unique ID of the Story Link.

try {
    $result = $apiInstance->updateStoryLink($body, $storyLinkPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateStoryLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Timetoreply\Shortcut\Model\UpdateStoryLink**](../Model/UpdateStoryLink.md)|  |
 **storyLinkPublicId** | **int**| The unique ID of the Story Link. |

### Return type

[**\Timetoreply\Shortcut\Model\StoryLink**](../Model/StoryLink.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTask**
> \Timetoreply\Shortcut\Model\Task updateTask($body, $storyPublicId, $taskPublicId)

Update Task

Update Task can be used to update Task properties.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Timetoreply\Shortcut\Model\UpdateTask(); // \Timetoreply\Shortcut\Model\UpdateTask | 
$storyPublicId = 789; // int | The unique identifier of the parent Story.
$taskPublicId = 789; // int | The unique identifier of the Task you wish to update.

try {
    $result = $apiInstance->updateTask($body, $storyPublicId, $taskPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Timetoreply\Shortcut\Model\UpdateTask**](../Model/UpdateTask.md)|  |
 **storyPublicId** | **int**| The unique identifier of the parent Story. |
 **taskPublicId** | **int**| The unique identifier of the Task you wish to update. |

### Return type

[**\Timetoreply\Shortcut\Model\Task**](../Model/Task.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadFiles**
> \Timetoreply\Shortcut\Model\UploadedFile[] uploadFiles($storyId, $file0, $file1, $file2, $file3)

Upload Files

Upload Files uploads one or many files and optionally associates them with a story.    Use the multipart/form-data content-type to upload.    Each `file` key should contain a separate file.    Each UploadedFile's name comes from the Content-Disposition header \"filename\" directive for that field.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKey('Shortcut-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Timetoreply\Shortcut\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Shortcut-Token', 'Bearer');

$apiInstance = new Timetoreply\Shortcut\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storyId = 789; // int | 
$file0 = "file0_example"; // string | 
$file1 = "file1_example"; // string | 
$file2 = "file2_example"; // string | 
$file3 = "file3_example"; // string | 

try {
    $result = $apiInstance->uploadFiles($storyId, $file0, $file1, $file2, $file3);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->uploadFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storyId** | **int**|  |
 **file0** | **string****string**|  |
 **file1** | **string****string**|  |
 **file2** | **string****string**|  |
 **file3** | **string****string**|  |

### Return type

[**\Timetoreply\Shortcut\Model\UploadedFile[]**](../Model/UploadedFile.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

