# Timetoreply\Shortcut\DefaultApi

All URIs are relative to https://api.app.shortcut.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCategory()**](DefaultApi.md#createCategory) | **POST** /api/v3/categories | Create Category |
| [**createDoc()**](DefaultApi.md#createDoc) | **POST** /api/v3/documents | Create Doc |
| [**createEntityTemplate()**](DefaultApi.md#createEntityTemplate) | **POST** /api/v3/entity-templates | Create Entity Template |
| [**createEpic()**](DefaultApi.md#createEpic) | **POST** /api/v3/epics | Create Epic |
| [**createEpicComment()**](DefaultApi.md#createEpicComment) | **POST** /api/v3/epics/{epic-public-id}/comments | Create Epic Comment |
| [**createEpicCommentComment()**](DefaultApi.md#createEpicCommentComment) | **POST** /api/v3/epics/{epic-public-id}/comments/{comment-public-id} | Create Epic Comment Comment |
| [**createEpicHealth()**](DefaultApi.md#createEpicHealth) | **POST** /api/v3/epics/{epic-public-id}/health | Create Epic Health |
| [**createGenericIntegration()**](DefaultApi.md#createGenericIntegration) | **POST** /api/v3/integrations/webhook | Create Generic Integration |
| [**createGroup()**](DefaultApi.md#createGroup) | **POST** /api/v3/groups | Create Group |
| [**createIteration()**](DefaultApi.md#createIteration) | **POST** /api/v3/iterations | Create Iteration |
| [**createLabel()**](DefaultApi.md#createLabel) | **POST** /api/v3/labels | Create Label |
| [**createLinkedFile()**](DefaultApi.md#createLinkedFile) | **POST** /api/v3/linked-files | Create Linked File |
| [**createMilestone()**](DefaultApi.md#createMilestone) | **POST** /api/v3/milestones | Create Milestone |
| [**createMultipleStories()**](DefaultApi.md#createMultipleStories) | **POST** /api/v3/stories/bulk | Create Multiple Stories |
| [**createObjective()**](DefaultApi.md#createObjective) | **POST** /api/v3/objectives | Create Objective |
| [**createProject()**](DefaultApi.md#createProject) | **POST** /api/v3/projects | Create Project |
| [**createStory()**](DefaultApi.md#createStory) | **POST** /api/v3/stories | Create Story |
| [**createStoryComment()**](DefaultApi.md#createStoryComment) | **POST** /api/v3/stories/{story-public-id}/comments | Create Story Comment |
| [**createStoryFromTemplate()**](DefaultApi.md#createStoryFromTemplate) | **POST** /api/v3/stories/from-template | Create Story From Template |
| [**createStoryLink()**](DefaultApi.md#createStoryLink) | **POST** /api/v3/story-links | Create Story Link |
| [**createStoryReaction()**](DefaultApi.md#createStoryReaction) | **POST** /api/v3/stories/{story-public-id}/comments/{comment-public-id}/reactions | Create Story Reaction |
| [**createTask()**](DefaultApi.md#createTask) | **POST** /api/v3/stories/{story-public-id}/tasks | Create Task |
| [**deleteCategory()**](DefaultApi.md#deleteCategory) | **DELETE** /api/v3/categories/{category-public-id} | Delete Category |
| [**deleteCustomField()**](DefaultApi.md#deleteCustomField) | **DELETE** /api/v3/custom-fields/{custom-field-public-id} | Delete Custom Field |
| [**deleteEntityTemplate()**](DefaultApi.md#deleteEntityTemplate) | **DELETE** /api/v3/entity-templates/{entity-template-public-id} | Delete Entity Template |
| [**deleteEpic()**](DefaultApi.md#deleteEpic) | **DELETE** /api/v3/epics/{epic-public-id} | Delete Epic |
| [**deleteEpicComment()**](DefaultApi.md#deleteEpicComment) | **DELETE** /api/v3/epics/{epic-public-id}/comments/{comment-public-id} | Delete Epic Comment |
| [**deleteFile()**](DefaultApi.md#deleteFile) | **DELETE** /api/v3/files/{file-public-id} | Delete File |
| [**deleteGenericIntegration()**](DefaultApi.md#deleteGenericIntegration) | **DELETE** /api/v3/integrations/webhook/{integration-public-id} | Delete Generic Integration |
| [**deleteIteration()**](DefaultApi.md#deleteIteration) | **DELETE** /api/v3/iterations/{iteration-public-id} | Delete Iteration |
| [**deleteLabel()**](DefaultApi.md#deleteLabel) | **DELETE** /api/v3/labels/{label-public-id} | Delete Label |
| [**deleteLinkedFile()**](DefaultApi.md#deleteLinkedFile) | **DELETE** /api/v3/linked-files/{linked-file-public-id} | Delete Linked File |
| [**deleteMilestone()**](DefaultApi.md#deleteMilestone) | **DELETE** /api/v3/milestones/{milestone-public-id} | Delete Milestone |
| [**deleteMultipleStories()**](DefaultApi.md#deleteMultipleStories) | **DELETE** /api/v3/stories/bulk | Delete Multiple Stories |
| [**deleteObjective()**](DefaultApi.md#deleteObjective) | **DELETE** /api/v3/objectives/{objective-public-id} | Delete Objective |
| [**deleteProject()**](DefaultApi.md#deleteProject) | **DELETE** /api/v3/projects/{project-public-id} | Delete Project |
| [**deleteStory()**](DefaultApi.md#deleteStory) | **DELETE** /api/v3/stories/{story-public-id} | Delete Story |
| [**deleteStoryComment()**](DefaultApi.md#deleteStoryComment) | **DELETE** /api/v3/stories/{story-public-id}/comments/{comment-public-id} | Delete Story Comment |
| [**deleteStoryLink()**](DefaultApi.md#deleteStoryLink) | **DELETE** /api/v3/story-links/{story-link-public-id} | Delete Story Link |
| [**deleteStoryReaction()**](DefaultApi.md#deleteStoryReaction) | **DELETE** /api/v3/stories/{story-public-id}/comments/{comment-public-id}/reactions | Delete Story Reaction |
| [**deleteTask()**](DefaultApi.md#deleteTask) | **DELETE** /api/v3/stories/{story-public-id}/tasks/{task-public-id} | Delete Task |
| [**disableIterations()**](DefaultApi.md#disableIterations) | **PUT** /api/v3/iterations/disable | Disable Iterations |
| [**disableStoryTemplates()**](DefaultApi.md#disableStoryTemplates) | **PUT** /api/v3/entity-templates/disable | Disable Story Templates |
| [**enableIterations()**](DefaultApi.md#enableIterations) | **PUT** /api/v3/iterations/enable | Enable Iterations |
| [**enableStoryTemplates()**](DefaultApi.md#enableStoryTemplates) | **PUT** /api/v3/entity-templates/enable | Enable Story Templates |
| [**getCategory()**](DefaultApi.md#getCategory) | **GET** /api/v3/categories/{category-public-id} | Get Category |
| [**getCurrentMemberInfo()**](DefaultApi.md#getCurrentMemberInfo) | **GET** /api/v3/member | Get Current Member Info |
| [**getCustomField()**](DefaultApi.md#getCustomField) | **GET** /api/v3/custom-fields/{custom-field-public-id} | Get Custom Field |
| [**getEntityTemplate()**](DefaultApi.md#getEntityTemplate) | **GET** /api/v3/entity-templates/{entity-template-public-id} | Get Entity Template |
| [**getEpic()**](DefaultApi.md#getEpic) | **GET** /api/v3/epics/{epic-public-id} | Get Epic |
| [**getEpicComment()**](DefaultApi.md#getEpicComment) | **GET** /api/v3/epics/{epic-public-id}/comments/{comment-public-id} | Get Epic Comment |
| [**getEpicHealth()**](DefaultApi.md#getEpicHealth) | **GET** /api/v3/epics/{epic-public-id}/health | Get Epic Health |
| [**getEpicWorkflow()**](DefaultApi.md#getEpicWorkflow) | **GET** /api/v3/epic-workflow | Get Epic Workflow |
| [**getExternalLinkStories()**](DefaultApi.md#getExternalLinkStories) | **GET** /api/v3/external-link/stories | Get External Link Stories |
| [**getFile()**](DefaultApi.md#getFile) | **GET** /api/v3/files/{file-public-id} | Get File |
| [**getGenericIntegration()**](DefaultApi.md#getGenericIntegration) | **GET** /api/v3/integrations/webhook/{integration-public-id} | Get Generic Integration |
| [**getGroup()**](DefaultApi.md#getGroup) | **GET** /api/v3/groups/{group-public-id} | Get Group |
| [**getIteration()**](DefaultApi.md#getIteration) | **GET** /api/v3/iterations/{iteration-public-id} | Get Iteration |
| [**getKeyResult()**](DefaultApi.md#getKeyResult) | **GET** /api/v3/key-results/{key-result-public-id} | Get Key Result |
| [**getLabel()**](DefaultApi.md#getLabel) | **GET** /api/v3/labels/{label-public-id} | Get Label |
| [**getLinkedFile()**](DefaultApi.md#getLinkedFile) | **GET** /api/v3/linked-files/{linked-file-public-id} | Get Linked File |
| [**getMember()**](DefaultApi.md#getMember) | **GET** /api/v3/members/{member-public-id} | Get Member |
| [**getMilestone()**](DefaultApi.md#getMilestone) | **GET** /api/v3/milestones/{milestone-public-id} | Get Milestone |
| [**getObjective()**](DefaultApi.md#getObjective) | **GET** /api/v3/objectives/{objective-public-id} | Get Objective |
| [**getProject()**](DefaultApi.md#getProject) | **GET** /api/v3/projects/{project-public-id} | Get Project |
| [**getRepository()**](DefaultApi.md#getRepository) | **GET** /api/v3/repositories/{repo-public-id} | Get Repository |
| [**getStory()**](DefaultApi.md#getStory) | **GET** /api/v3/stories/{story-public-id} | Get Story |
| [**getStoryComment()**](DefaultApi.md#getStoryComment) | **GET** /api/v3/stories/{story-public-id}/comments/{comment-public-id} | Get Story Comment |
| [**getStoryLink()**](DefaultApi.md#getStoryLink) | **GET** /api/v3/story-links/{story-link-public-id} | Get Story Link |
| [**getTask()**](DefaultApi.md#getTask) | **GET** /api/v3/stories/{story-public-id}/tasks/{task-public-id} | Get Task |
| [**getWorkflow()**](DefaultApi.md#getWorkflow) | **GET** /api/v3/workflows/{workflow-public-id} | Get Workflow |
| [**listCategories()**](DefaultApi.md#listCategories) | **GET** /api/v3/categories | List Categories |
| [**listCategoryMilestones()**](DefaultApi.md#listCategoryMilestones) | **GET** /api/v3/categories/{category-public-id}/milestones | List Category Milestones |
| [**listCategoryObjectives()**](DefaultApi.md#listCategoryObjectives) | **GET** /api/v3/categories/{category-public-id}/objectives | List Category Objectives |
| [**listCustomFields()**](DefaultApi.md#listCustomFields) | **GET** /api/v3/custom-fields | List Custom Fields |
| [**listDocs()**](DefaultApi.md#listDocs) | **GET** /api/v3/documents | List Docs |
| [**listEntityTemplates()**](DefaultApi.md#listEntityTemplates) | **GET** /api/v3/entity-templates | List Entity Templates |
| [**listEpicComments()**](DefaultApi.md#listEpicComments) | **GET** /api/v3/epics/{epic-public-id}/comments | List Epic Comments |
| [**listEpicHealths()**](DefaultApi.md#listEpicHealths) | **GET** /api/v3/epics/{epic-public-id}/health-history | List Epic Healths |
| [**listEpicStories()**](DefaultApi.md#listEpicStories) | **GET** /api/v3/epics/{epic-public-id}/stories | List Epic Stories |
| [**listEpics()**](DefaultApi.md#listEpics) | **GET** /api/v3/epics | List Epics |
| [**listEpicsPaginated()**](DefaultApi.md#listEpicsPaginated) | **GET** /api/v3/epics/paginated | List Epics Paginated |
| [**listFiles()**](DefaultApi.md#listFiles) | **GET** /api/v3/files | List Files |
| [**listGroupStories()**](DefaultApi.md#listGroupStories) | **GET** /api/v3/groups/{group-public-id}/stories | List Group Stories |
| [**listGroups()**](DefaultApi.md#listGroups) | **GET** /api/v3/groups | List Groups |
| [**listIterationStories()**](DefaultApi.md#listIterationStories) | **GET** /api/v3/iterations/{iteration-public-id}/stories | List Iteration Stories |
| [**listIterations()**](DefaultApi.md#listIterations) | **GET** /api/v3/iterations | List Iterations |
| [**listLabelEpics()**](DefaultApi.md#listLabelEpics) | **GET** /api/v3/labels/{label-public-id}/epics | List Label Epics |
| [**listLabelStories()**](DefaultApi.md#listLabelStories) | **GET** /api/v3/labels/{label-public-id}/stories | List Label Stories |
| [**listLabels()**](DefaultApi.md#listLabels) | **GET** /api/v3/labels | List Labels |
| [**listLinkedFiles()**](DefaultApi.md#listLinkedFiles) | **GET** /api/v3/linked-files | List Linked Files |
| [**listMembers()**](DefaultApi.md#listMembers) | **GET** /api/v3/members | List Members |
| [**listMilestoneEpics()**](DefaultApi.md#listMilestoneEpics) | **GET** /api/v3/milestones/{milestone-public-id}/epics | List Milestone Epics |
| [**listMilestones()**](DefaultApi.md#listMilestones) | **GET** /api/v3/milestones | List Milestones |
| [**listObjectiveEpics()**](DefaultApi.md#listObjectiveEpics) | **GET** /api/v3/objectives/{objective-public-id}/epics | List Objective Epics |
| [**listObjectives()**](DefaultApi.md#listObjectives) | **GET** /api/v3/objectives | List Objectives |
| [**listProjects()**](DefaultApi.md#listProjects) | **GET** /api/v3/projects | List Projects |
| [**listRepositories()**](DefaultApi.md#listRepositories) | **GET** /api/v3/repositories | List Repositories |
| [**listStories()**](DefaultApi.md#listStories) | **GET** /api/v3/projects/{project-public-id}/stories | List Stories |
| [**listStoryComment()**](DefaultApi.md#listStoryComment) | **GET** /api/v3/stories/{story-public-id}/comments | List Story Comment |
| [**listWorkflows()**](DefaultApi.md#listWorkflows) | **GET** /api/v3/workflows | List Workflows |
| [**search()**](DefaultApi.md#search) | **GET** /api/v3/search | Search |
| [**searchEpics()**](DefaultApi.md#searchEpics) | **GET** /api/v3/search/epics | Search Epics |
| [**searchIterations()**](DefaultApi.md#searchIterations) | **GET** /api/v3/search/iterations | Search Iterations |
| [**searchMilestones()**](DefaultApi.md#searchMilestones) | **GET** /api/v3/search/milestones | Search Milestones |
| [**searchObjectives()**](DefaultApi.md#searchObjectives) | **GET** /api/v3/search/objectives | Search Objectives |
| [**searchStories()**](DefaultApi.md#searchStories) | **GET** /api/v3/search/stories | Search Stories |
| [**searchStoriesOld()**](DefaultApi.md#searchStoriesOld) | **POST** /api/v3/stories/search | Search Stories (Old) |
| [**storyHistory()**](DefaultApi.md#storyHistory) | **GET** /api/v3/stories/{story-public-id}/history | Story History |
| [**unlinkCommentThreadFromSlack()**](DefaultApi.md#unlinkCommentThreadFromSlack) | **POST** /api/v3/stories/{story-public-id}/comments/{comment-public-id}/unlink-from-slack | Unlink Comment thread from Slack |
| [**unlinkProductboardFromEpic()**](DefaultApi.md#unlinkProductboardFromEpic) | **POST** /api/v3/epics/{epic-public-id}/unlink-productboard | Unlink Productboard from Epic |
| [**updateCategory()**](DefaultApi.md#updateCategory) | **PUT** /api/v3/categories/{category-public-id} | Update Category |
| [**updateCustomField()**](DefaultApi.md#updateCustomField) | **PUT** /api/v3/custom-fields/{custom-field-public-id} | Update Custom Field |
| [**updateEntityTemplate()**](DefaultApi.md#updateEntityTemplate) | **PUT** /api/v3/entity-templates/{entity-template-public-id} | Update Entity Template |
| [**updateEpic()**](DefaultApi.md#updateEpic) | **PUT** /api/v3/epics/{epic-public-id} | Update Epic |
| [**updateEpicComment()**](DefaultApi.md#updateEpicComment) | **PUT** /api/v3/epics/{epic-public-id}/comments/{comment-public-id} | Update Epic Comment |
| [**updateFile()**](DefaultApi.md#updateFile) | **PUT** /api/v3/files/{file-public-id} | Update File |
| [**updateGroup()**](DefaultApi.md#updateGroup) | **PUT** /api/v3/groups/{group-public-id} | Update Group |
| [**updateHealth()**](DefaultApi.md#updateHealth) | **PUT** /api/v3/health/{health-public-id} | Update Health |
| [**updateIteration()**](DefaultApi.md#updateIteration) | **PUT** /api/v3/iterations/{iteration-public-id} | Update Iteration |
| [**updateKeyResult()**](DefaultApi.md#updateKeyResult) | **PUT** /api/v3/key-results/{key-result-public-id} | Update Key Result |
| [**updateLabel()**](DefaultApi.md#updateLabel) | **PUT** /api/v3/labels/{label-public-id} | Update Label |
| [**updateLinkedFile()**](DefaultApi.md#updateLinkedFile) | **PUT** /api/v3/linked-files/{linked-file-public-id} | Update Linked File |
| [**updateMilestone()**](DefaultApi.md#updateMilestone) | **PUT** /api/v3/milestones/{milestone-public-id} | Update Milestone |
| [**updateMultipleStories()**](DefaultApi.md#updateMultipleStories) | **PUT** /api/v3/stories/bulk | Update Multiple Stories |
| [**updateObjective()**](DefaultApi.md#updateObjective) | **PUT** /api/v3/objectives/{objective-public-id} | Update Objective |
| [**updateProject()**](DefaultApi.md#updateProject) | **PUT** /api/v3/projects/{project-public-id} | Update Project |
| [**updateStory()**](DefaultApi.md#updateStory) | **PUT** /api/v3/stories/{story-public-id} | Update Story |
| [**updateStoryComment()**](DefaultApi.md#updateStoryComment) | **PUT** /api/v3/stories/{story-public-id}/comments/{comment-public-id} | Update Story Comment |
| [**updateStoryLink()**](DefaultApi.md#updateStoryLink) | **PUT** /api/v3/story-links/{story-link-public-id} | Update Story Link |
| [**updateTask()**](DefaultApi.md#updateTask) | **PUT** /api/v3/stories/{story-public-id}/tasks/{task-public-id} | Update Task |
| [**uploadFiles()**](DefaultApi.md#uploadFiles) | **POST** /api/v3/files | Upload Files |


## `createCategory()`

```php
createCategory($createCategory): \Timetoreply\Shortcut\Model\Category
```

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
$createCategory = new \Timetoreply\Shortcut\Model\CreateCategory(); // \Timetoreply\Shortcut\Model\CreateCategory

try {
    $result = $apiInstance->createCategory($createCategory);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createCategory** | [**\Timetoreply\Shortcut\Model\CreateCategory**](../Model/CreateCategory.md)|  | |

### Return type

[**\Timetoreply\Shortcut\Model\Category**](../Model/Category.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDoc()`

```php
createDoc($createDoc): \Timetoreply\Shortcut\Model\DocSlim
```

Create Doc

Creates a new Doc.

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
$createDoc = new \Timetoreply\Shortcut\Model\CreateDoc(); // \Timetoreply\Shortcut\Model\CreateDoc

try {
    $result = $apiInstance->createDoc($createDoc);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createDoc: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createDoc** | [**\Timetoreply\Shortcut\Model\CreateDoc**](../Model/CreateDoc.md)|  | |

### Return type

[**\Timetoreply\Shortcut\Model\DocSlim**](../Model/DocSlim.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEntityTemplate()`

```php
createEntityTemplate($createEntityTemplate): \Timetoreply\Shortcut\Model\EntityTemplate
```

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
$createEntityTemplate = new \Timetoreply\Shortcut\Model\CreateEntityTemplate(); // \Timetoreply\Shortcut\Model\CreateEntityTemplate | Request parameters for creating an entirely new entity template.

try {
    $result = $apiInstance->createEntityTemplate($createEntityTemplate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createEntityTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createEntityTemplate** | [**\Timetoreply\Shortcut\Model\CreateEntityTemplate**](../Model/CreateEntityTemplate.md)| Request parameters for creating an entirely new entity template. | |

### Return type

[**\Timetoreply\Shortcut\Model\EntityTemplate**](../Model/EntityTemplate.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEpic()`

```php
createEpic($createEpic): \Timetoreply\Shortcut\Model\Epic
```

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
$createEpic = new \Timetoreply\Shortcut\Model\CreateEpic(); // \Timetoreply\Shortcut\Model\CreateEpic

try {
    $result = $apiInstance->createEpic($createEpic);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createEpic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createEpic** | [**\Timetoreply\Shortcut\Model\CreateEpic**](../Model/CreateEpic.md)|  | |

### Return type

[**\Timetoreply\Shortcut\Model\Epic**](../Model/Epic.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEpicComment()`

```php
createEpicComment($epicPublicId, $createEpicComment): \Timetoreply\Shortcut\Model\ThreadedComment
```

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
$epicPublicId = 56; // int | The ID of the associated Epic.
$createEpicComment = new \Timetoreply\Shortcut\Model\CreateEpicComment(); // \Timetoreply\Shortcut\Model\CreateEpicComment

try {
    $result = $apiInstance->createEpicComment($epicPublicId, $createEpicComment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createEpicComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **epicPublicId** | **int**| The ID of the associated Epic. | |
| **createEpicComment** | [**\Timetoreply\Shortcut\Model\CreateEpicComment**](../Model/CreateEpicComment.md)|  | |

### Return type

[**\Timetoreply\Shortcut\Model\ThreadedComment**](../Model/ThreadedComment.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEpicCommentComment()`

```php
createEpicCommentComment($epicPublicId, $commentPublicId, $createCommentComment): \Timetoreply\Shortcut\Model\ThreadedComment
```

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
$epicPublicId = 56; // int | The ID of the associated Epic.
$commentPublicId = 56; // int | The ID of the parent Epic Comment.
$createCommentComment = new \Timetoreply\Shortcut\Model\CreateCommentComment(); // \Timetoreply\Shortcut\Model\CreateCommentComment

try {
    $result = $apiInstance->createEpicCommentComment($epicPublicId, $commentPublicId, $createCommentComment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createEpicCommentComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **epicPublicId** | **int**| The ID of the associated Epic. | |
| **commentPublicId** | **int**| The ID of the parent Epic Comment. | |
| **createCommentComment** | [**\Timetoreply\Shortcut\Model\CreateCommentComment**](../Model/CreateCommentComment.md)|  | |

### Return type

[**\Timetoreply\Shortcut\Model\ThreadedComment**](../Model/ThreadedComment.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEpicHealth()`

```php
createEpicHealth($epicPublicId, $createEpicHealth): \Timetoreply\Shortcut\Model\Health
```

Create Epic Health

Create a new health status for the specified Epic.

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
$epicPublicId = 56; // int | The unique ID of the Epic.
$createEpicHealth = new \Timetoreply\Shortcut\Model\CreateEpicHealth(); // \Timetoreply\Shortcut\Model\CreateEpicHealth

try {
    $result = $apiInstance->createEpicHealth($epicPublicId, $createEpicHealth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createEpicHealth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **epicPublicId** | **int**| The unique ID of the Epic. | |
| **createEpicHealth** | [**\Timetoreply\Shortcut\Model\CreateEpicHealth**](../Model/CreateEpicHealth.md)|  | |

### Return type

[**\Timetoreply\Shortcut\Model\Health**](../Model/Health.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createGenericIntegration()`

```php
createGenericIntegration($createGenericIntegration)
```

Create Generic Integration

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
$createGenericIntegration = new \Timetoreply\Shortcut\Model\CreateGenericIntegration(); // \Timetoreply\Shortcut\Model\CreateGenericIntegration

try {
    $apiInstance->createGenericIntegration($createGenericIntegration);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createGenericIntegration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createGenericIntegration** | [**\Timetoreply\Shortcut\Model\CreateGenericIntegration**](../Model/CreateGenericIntegration.md)|  | |

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createGroup()`

```php
createGroup($createGroup): \Timetoreply\Shortcut\Model\Group
```

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
$createGroup = new \Timetoreply\Shortcut\Model\CreateGroup(); // \Timetoreply\Shortcut\Model\CreateGroup

try {
    $result = $apiInstance->createGroup($createGroup);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createGroup** | [**\Timetoreply\Shortcut\Model\CreateGroup**](../Model/CreateGroup.md)|  | |

### Return type

[**\Timetoreply\Shortcut\Model\Group**](../Model/Group.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createIteration()`

```php
createIteration($createIteration): \Timetoreply\Shortcut\Model\Iteration
```

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
$createIteration = new \Timetoreply\Shortcut\Model\CreateIteration(); // \Timetoreply\Shortcut\Model\CreateIteration

try {
    $result = $apiInstance->createIteration($createIteration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createIteration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createIteration** | [**\Timetoreply\Shortcut\Model\CreateIteration**](../Model/CreateIteration.md)|  | |

### Return type

[**\Timetoreply\Shortcut\Model\Iteration**](../Model/Iteration.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createLabel()`

```php
createLabel($createLabelParams): \Timetoreply\Shortcut\Model\Label
```

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
$createLabelParams = new \Timetoreply\Shortcut\Model\CreateLabelParams(); // \Timetoreply\Shortcut\Model\CreateLabelParams | Request parameters for creating a Label on a Shortcut Story.

try {
    $result = $apiInstance->createLabel($createLabelParams);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createLabel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createLabelParams** | [**\Timetoreply\Shortcut\Model\CreateLabelParams**](../Model/CreateLabelParams.md)| Request parameters for creating a Label on a Shortcut Story. | |

### Return type

[**\Timetoreply\Shortcut\Model\Label**](../Model/Label.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createLinkedFile()`

```php
createLinkedFile($createLinkedFile): \Timetoreply\Shortcut\Model\LinkedFile
```

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
$createLinkedFile = new \Timetoreply\Shortcut\Model\CreateLinkedFile(); // \Timetoreply\Shortcut\Model\CreateLinkedFile

try {
    $result = $apiInstance->createLinkedFile($createLinkedFile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createLinkedFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createLinkedFile** | [**\Timetoreply\Shortcut\Model\CreateLinkedFile**](../Model/CreateLinkedFile.md)|  | |

### Return type

[**\Timetoreply\Shortcut\Model\LinkedFile**](../Model/LinkedFile.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createMilestone()`

```php
createMilestone($createMilestone): \Timetoreply\Shortcut\Model\Milestone
```

Create Milestone

(Deprecated: Use 'Create Objective') Create Milestone allows you to create a new Milestone in Shortcut.

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
$createMilestone = new \Timetoreply\Shortcut\Model\CreateMilestone(); // \Timetoreply\Shortcut\Model\CreateMilestone

try {
    $result = $apiInstance->createMilestone($createMilestone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createMilestone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createMilestone** | [**\Timetoreply\Shortcut\Model\CreateMilestone**](../Model/CreateMilestone.md)|  | |

### Return type

[**\Timetoreply\Shortcut\Model\Milestone**](../Model/Milestone.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createMultipleStories()`

```php
createMultipleStories($createStories): \Timetoreply\Shortcut\Model\StorySlim[]
```

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
$createStories = new \Timetoreply\Shortcut\Model\CreateStories(); // \Timetoreply\Shortcut\Model\CreateStories

try {
    $result = $apiInstance->createMultipleStories($createStories);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createMultipleStories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createStories** | [**\Timetoreply\Shortcut\Model\CreateStories**](../Model/CreateStories.md)|  | |

### Return type

[**\Timetoreply\Shortcut\Model\StorySlim[]**](../Model/StorySlim.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createObjective()`

```php
createObjective($createObjective): \Timetoreply\Shortcut\Model\Objective
```

Create Objective

Create Objective allows you to create a new Objective in Shortcut.

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
$createObjective = new \Timetoreply\Shortcut\Model\CreateObjective(); // \Timetoreply\Shortcut\Model\CreateObjective

try {
    $result = $apiInstance->createObjective($createObjective);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createObjective: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createObjective** | [**\Timetoreply\Shortcut\Model\CreateObjective**](../Model/CreateObjective.md)|  | |

### Return type

[**\Timetoreply\Shortcut\Model\Objective**](../Model/Objective.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createProject()`

```php
createProject($createProject): \Timetoreply\Shortcut\Model\Project
```

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
$createProject = new \Timetoreply\Shortcut\Model\CreateProject(); // \Timetoreply\Shortcut\Model\CreateProject

try {
    $result = $apiInstance->createProject($createProject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createProject** | [**\Timetoreply\Shortcut\Model\CreateProject**](../Model/CreateProject.md)|  | |

### Return type

[**\Timetoreply\Shortcut\Model\Project**](../Model/Project.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createStory()`

```php
createStory($createStoryParams): \Timetoreply\Shortcut\Model\Story
```

Create Story

Create Story is used to add a new story to your Shortcut Workspace.     This endpoint requires that either **workflow_state_id** or **project_id** be provided, but will reject the request if both or neither are specified. The workflow_state_id has been marked as required and is the recommended field to specify because we are in the process of sunsetting Projects in Shortcut.

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
$createStoryParams = new \Timetoreply\Shortcut\Model\CreateStoryParams(); // \Timetoreply\Shortcut\Model\CreateStoryParams | Request parameters for creating a story.

try {
    $result = $apiInstance->createStory($createStoryParams);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createStory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createStoryParams** | [**\Timetoreply\Shortcut\Model\CreateStoryParams**](../Model/CreateStoryParams.md)| Request parameters for creating a story. | |

### Return type

[**\Timetoreply\Shortcut\Model\Story**](../Model/Story.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createStoryComment()`

```php
createStoryComment($storyPublicId, $createStoryComment): \Timetoreply\Shortcut\Model\StoryComment
```

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
$storyPublicId = 56; // int | The ID of the Story that the Comment is in.
$createStoryComment = new \Timetoreply\Shortcut\Model\CreateStoryComment(); // \Timetoreply\Shortcut\Model\CreateStoryComment

try {
    $result = $apiInstance->createStoryComment($storyPublicId, $createStoryComment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createStoryComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storyPublicId** | **int**| The ID of the Story that the Comment is in. | |
| **createStoryComment** | [**\Timetoreply\Shortcut\Model\CreateStoryComment**](../Model/CreateStoryComment.md)|  | |

### Return type

[**\Timetoreply\Shortcut\Model\StoryComment**](../Model/StoryComment.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createStoryFromTemplate()`

```php
createStoryFromTemplate($createStoryFromTemplateParams): \Timetoreply\Shortcut\Model\Story
```

Create Story From Template

Create Story From Template is used to add a new story derived from a template to your Shortcut Workspace.

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
$createStoryFromTemplateParams = new \Timetoreply\Shortcut\Model\CreateStoryFromTemplateParams(); // \Timetoreply\Shortcut\Model\CreateStoryFromTemplateParams | Request parameters for creating a story from a story template. These parameters are merged with the values derived from the template.

try {
    $result = $apiInstance->createStoryFromTemplate($createStoryFromTemplateParams);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createStoryFromTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createStoryFromTemplateParams** | [**\Timetoreply\Shortcut\Model\CreateStoryFromTemplateParams**](../Model/CreateStoryFromTemplateParams.md)| Request parameters for creating a story from a story template. These parameters are merged with the values derived from the template. | |

### Return type

[**\Timetoreply\Shortcut\Model\Story**](../Model/Story.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createStoryLink()`

```php
createStoryLink($createStoryLink): \Timetoreply\Shortcut\Model\StoryLink
```

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
$createStoryLink = new \Timetoreply\Shortcut\Model\CreateStoryLink(); // \Timetoreply\Shortcut\Model\CreateStoryLink

try {
    $result = $apiInstance->createStoryLink($createStoryLink);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createStoryLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createStoryLink** | [**\Timetoreply\Shortcut\Model\CreateStoryLink**](../Model/CreateStoryLink.md)|  | |

### Return type

[**\Timetoreply\Shortcut\Model\StoryLink**](../Model/StoryLink.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createStoryReaction()`

```php
createStoryReaction($storyPublicId, $commentPublicId, $createOrDeleteStoryReaction): \Timetoreply\Shortcut\Model\StoryReaction[]
```

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
$storyPublicId = 56; // int | The ID of the Story that the Comment is in.
$commentPublicId = 56; // int | The ID of the Comment.
$createOrDeleteStoryReaction = new \Timetoreply\Shortcut\Model\CreateOrDeleteStoryReaction(); // \Timetoreply\Shortcut\Model\CreateOrDeleteStoryReaction

try {
    $result = $apiInstance->createStoryReaction($storyPublicId, $commentPublicId, $createOrDeleteStoryReaction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createStoryReaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storyPublicId** | **int**| The ID of the Story that the Comment is in. | |
| **commentPublicId** | **int**| The ID of the Comment. | |
| **createOrDeleteStoryReaction** | [**\Timetoreply\Shortcut\Model\CreateOrDeleteStoryReaction**](../Model/CreateOrDeleteStoryReaction.md)|  | |

### Return type

[**\Timetoreply\Shortcut\Model\StoryReaction[]**](../Model/StoryReaction.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTask()`

```php
createTask($storyPublicId, $createTask): \Timetoreply\Shortcut\Model\Task
```

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
$storyPublicId = 56; // int | The ID of the Story that the Task will be in.
$createTask = new \Timetoreply\Shortcut\Model\CreateTask(); // \Timetoreply\Shortcut\Model\CreateTask

try {
    $result = $apiInstance->createTask($storyPublicId, $createTask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storyPublicId** | **int**| The ID of the Story that the Task will be in. | |
| **createTask** | [**\Timetoreply\Shortcut\Model\CreateTask**](../Model/CreateTask.md)|  | |

### Return type

[**\Timetoreply\Shortcut\Model\Task**](../Model/Task.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCategory()`

```php
deleteCategory($categoryPublicId)
```

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
$categoryPublicId = 56; // int | The unique ID of the Category.

try {
    $apiInstance->deleteCategory($categoryPublicId);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **categoryPublicId** | **int**| The unique ID of the Category. | |

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCustomField()`

```php
deleteCustomField($customFieldPublicId)
```

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
$customFieldPublicId = 'customFieldPublicId_example'; // string | The unique ID of the CustomField.

try {
    $apiInstance->deleteCustomField($customFieldPublicId);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteCustomField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customFieldPublicId** | **string**| The unique ID of the CustomField. | |

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEntityTemplate()`

```php
deleteEntityTemplate($entityTemplatePublicId)
```

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
$entityTemplatePublicId = 'entityTemplatePublicId_example'; // string | The unique ID of the entity template.

try {
    $apiInstance->deleteEntityTemplate($entityTemplatePublicId);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteEntityTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entityTemplatePublicId** | **string**| The unique ID of the entity template. | |

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEpic()`

```php
deleteEpic($epicPublicId)
```

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
$epicPublicId = 56; // int | The unique ID of the Epic.

try {
    $apiInstance->deleteEpic($epicPublicId);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteEpic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **epicPublicId** | **int**| The unique ID of the Epic. | |

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEpicComment()`

```php
deleteEpicComment($epicPublicId, $commentPublicId)
```

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
$epicPublicId = 56; // int | The ID of the associated Epic.
$commentPublicId = 56; // int | The ID of the Comment.

try {
    $apiInstance->deleteEpicComment($epicPublicId, $commentPublicId);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteEpicComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **epicPublicId** | **int**| The ID of the associated Epic. | |
| **commentPublicId** | **int**| The ID of the Comment. | |

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFile()`

```php
deleteFile($filePublicId)
```

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
$filePublicId = 56; // int | The File’s unique ID.

try {
    $apiInstance->deleteFile($filePublicId);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filePublicId** | **int**| The File’s unique ID. | |

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteGenericIntegration()`

```php
deleteGenericIntegration($integrationPublicId)
```

Delete Generic Integration

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
$integrationPublicId = 56; // int | 

try {
    $apiInstance->deleteGenericIntegration($integrationPublicId);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteGenericIntegration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **integrationPublicId** | **int**|  | |

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteIteration()`

```php
deleteIteration($iterationPublicId)
```

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
$iterationPublicId = 56; // int | The unique ID of the Iteration.

try {
    $apiInstance->deleteIteration($iterationPublicId);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteIteration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **iterationPublicId** | **int**| The unique ID of the Iteration. | |

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteLabel()`

```php
deleteLabel($labelPublicId)
```

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
$labelPublicId = 56; // int | The unique ID of the Label.

try {
    $apiInstance->deleteLabel($labelPublicId);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteLabel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **labelPublicId** | **int**| The unique ID of the Label. | |

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteLinkedFile()`

```php
deleteLinkedFile($linkedFilePublicId)
```

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
$linkedFilePublicId = 56; // int | The unique identifier of the linked file.

try {
    $apiInstance->deleteLinkedFile($linkedFilePublicId);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteLinkedFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **linkedFilePublicId** | **int**| The unique identifier of the linked file. | |

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteMilestone()`

```php
deleteMilestone($milestonePublicId)
```

Delete Milestone

(Deprecated: Use 'Delete Objective') Delete Milestone can be used to delete any Milestone.

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
$milestonePublicId = 56; // int | The ID of the Milestone.

try {
    $apiInstance->deleteMilestone($milestonePublicId);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteMilestone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **milestonePublicId** | **int**| The ID of the Milestone. | |

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteMultipleStories()`

```php
deleteMultipleStories($deleteStories)
```

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
$deleteStories = new \Timetoreply\Shortcut\Model\DeleteStories(); // \Timetoreply\Shortcut\Model\DeleteStories

try {
    $apiInstance->deleteMultipleStories($deleteStories);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteMultipleStories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **deleteStories** | [**\Timetoreply\Shortcut\Model\DeleteStories**](../Model/DeleteStories.md)|  | |

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteObjective()`

```php
deleteObjective($objectivePublicId)
```

Delete Objective

Delete Objective can be used to delete any Objective.

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
$objectivePublicId = 56; // int | The ID of the Objective.

try {
    $apiInstance->deleteObjective($objectivePublicId);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteObjective: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **objectivePublicId** | **int**| The ID of the Objective. | |

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProject()`

```php
deleteProject($projectPublicId)
```

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
$projectPublicId = 56; // int | The unique ID of the Project.

try {
    $apiInstance->deleteProject($projectPublicId);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectPublicId** | **int**| The unique ID of the Project. | |

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteStory()`

```php
deleteStory($storyPublicId)
```

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
$storyPublicId = 56; // int | The ID of the Story.

try {
    $apiInstance->deleteStory($storyPublicId);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteStory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storyPublicId** | **int**| The ID of the Story. | |

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteStoryComment()`

```php
deleteStoryComment($storyPublicId, $commentPublicId)
```

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
$storyPublicId = 56; // int | The ID of the Story that the Comment is in.
$commentPublicId = 56; // int | The ID of the Comment.

try {
    $apiInstance->deleteStoryComment($storyPublicId, $commentPublicId);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteStoryComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storyPublicId** | **int**| The ID of the Story that the Comment is in. | |
| **commentPublicId** | **int**| The ID of the Comment. | |

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteStoryLink()`

```php
deleteStoryLink($storyLinkPublicId)
```

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
$storyLinkPublicId = 56; // int | The unique ID of the Story Link.

try {
    $apiInstance->deleteStoryLink($storyLinkPublicId);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteStoryLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storyLinkPublicId** | **int**| The unique ID of the Story Link. | |

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteStoryReaction()`

```php
deleteStoryReaction($storyPublicId, $commentPublicId, $createOrDeleteStoryReaction)
```

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
$storyPublicId = 56; // int | The ID of the Story that the Comment is in.
$commentPublicId = 56; // int | The ID of the Comment.
$createOrDeleteStoryReaction = new \Timetoreply\Shortcut\Model\CreateOrDeleteStoryReaction(); // \Timetoreply\Shortcut\Model\CreateOrDeleteStoryReaction

try {
    $apiInstance->deleteStoryReaction($storyPublicId, $commentPublicId, $createOrDeleteStoryReaction);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteStoryReaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storyPublicId** | **int**| The ID of the Story that the Comment is in. | |
| **commentPublicId** | **int**| The ID of the Comment. | |
| **createOrDeleteStoryReaction** | [**\Timetoreply\Shortcut\Model\CreateOrDeleteStoryReaction**](../Model/CreateOrDeleteStoryReaction.md)|  | |

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTask()`

```php
deleteTask($storyPublicId, $taskPublicId)
```

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
$storyPublicId = 56; // int | The unique ID of the Story this Task is associated with.
$taskPublicId = 56; // int | The unique ID of the Task.

try {
    $apiInstance->deleteTask($storyPublicId, $taskPublicId);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storyPublicId** | **int**| The unique ID of the Story this Task is associated with. | |
| **taskPublicId** | **int**| The unique ID of the Task. | |

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `disableIterations()`

```php
disableIterations()
```

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

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `disableStoryTemplates()`

```php
disableStoryTemplates()
```

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

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enableIterations()`

```php
enableIterations()
```

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

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enableStoryTemplates()`

```php
enableStoryTemplates()
```

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

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCategory()`

```php
getCategory($categoryPublicId): \Timetoreply\Shortcut\Model\Category
```

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
$categoryPublicId = 56; // int | The unique ID of the Category.

try {
    $result = $apiInstance->getCategory($categoryPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **categoryPublicId** | **int**| The unique ID of the Category. | |

### Return type

[**\Timetoreply\Shortcut\Model\Category**](../Model/Category.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCurrentMemberInfo()`

```php
getCurrentMemberInfo(): \Timetoreply\Shortcut\Model\MemberInfo
```

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
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Timetoreply\Shortcut\Model\MemberInfo**](../Model/MemberInfo.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomField()`

```php
getCustomField($customFieldPublicId): \Timetoreply\Shortcut\Model\CustomField
```

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
$customFieldPublicId = 'customFieldPublicId_example'; // string | The unique ID of the CustomField.

try {
    $result = $apiInstance->getCustomField($customFieldPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCustomField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customFieldPublicId** | **string**| The unique ID of the CustomField. | |

### Return type

[**\Timetoreply\Shortcut\Model\CustomField**](../Model/CustomField.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEntityTemplate()`

```php
getEntityTemplate($entityTemplatePublicId): \Timetoreply\Shortcut\Model\EntityTemplate
```

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
$entityTemplatePublicId = 'entityTemplatePublicId_example'; // string | The unique ID of the entity template.

try {
    $result = $apiInstance->getEntityTemplate($entityTemplatePublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getEntityTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entityTemplatePublicId** | **string**| The unique ID of the entity template. | |

### Return type

[**\Timetoreply\Shortcut\Model\EntityTemplate**](../Model/EntityTemplate.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEpic()`

```php
getEpic($epicPublicId): \Timetoreply\Shortcut\Model\Epic
```

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
$epicPublicId = 56; // int | The unique ID of the Epic.

try {
    $result = $apiInstance->getEpic($epicPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getEpic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **epicPublicId** | **int**| The unique ID of the Epic. | |

### Return type

[**\Timetoreply\Shortcut\Model\Epic**](../Model/Epic.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEpicComment()`

```php
getEpicComment($epicPublicId, $commentPublicId): \Timetoreply\Shortcut\Model\ThreadedComment
```

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
$epicPublicId = 56; // int | The ID of the associated Epic.
$commentPublicId = 56; // int | The ID of the Comment.

try {
    $result = $apiInstance->getEpicComment($epicPublicId, $commentPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getEpicComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **epicPublicId** | **int**| The ID of the associated Epic. | |
| **commentPublicId** | **int**| The ID of the Comment. | |

### Return type

[**\Timetoreply\Shortcut\Model\ThreadedComment**](../Model/ThreadedComment.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEpicHealth()`

```php
getEpicHealth($epicPublicId): \Timetoreply\Shortcut\Model\Health
```

Get Epic Health

Get the current health for the specified Epic.

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
$epicPublicId = 56; // int | The unique ID of the Epic.

try {
    $result = $apiInstance->getEpicHealth($epicPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getEpicHealth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **epicPublicId** | **int**| The unique ID of the Epic. | |

### Return type

[**\Timetoreply\Shortcut\Model\Health**](../Model/Health.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEpicWorkflow()`

```php
getEpicWorkflow(): \Timetoreply\Shortcut\Model\EpicWorkflow
```

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
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Timetoreply\Shortcut\Model\EpicWorkflow**](../Model/EpicWorkflow.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExternalLinkStories()`

```php
getExternalLinkStories($externalLink): \Timetoreply\Shortcut\Model\StorySlim[]
```

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
$externalLink = 'externalLink_example'; // string | The external link associated with one or more stories.

try {
    $result = $apiInstance->getExternalLinkStories($externalLink);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getExternalLinkStories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **externalLink** | **string**| The external link associated with one or more stories. | |

### Return type

[**\Timetoreply\Shortcut\Model\StorySlim[]**](../Model/StorySlim.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFile()`

```php
getFile($filePublicId): \Timetoreply\Shortcut\Model\UploadedFile
```

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
$filePublicId = 56; // int | The File’s unique ID.

try {
    $result = $apiInstance->getFile($filePublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filePublicId** | **int**| The File’s unique ID. | |

### Return type

[**\Timetoreply\Shortcut\Model\UploadedFile**](../Model/UploadedFile.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGenericIntegration()`

```php
getGenericIntegration($integrationPublicId)
```

Get Generic Integration

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
$integrationPublicId = 56; // int | 

try {
    $apiInstance->getGenericIntegration($integrationPublicId);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getGenericIntegration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **integrationPublicId** | **int**|  | |

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroup()`

```php
getGroup($groupPublicId): \Timetoreply\Shortcut\Model\Group
```

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
$groupPublicId = 'groupPublicId_example'; // string | The unique ID of the Group.

try {
    $result = $apiInstance->getGroup($groupPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **groupPublicId** | **string**| The unique ID of the Group. | |

### Return type

[**\Timetoreply\Shortcut\Model\Group**](../Model/Group.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIteration()`

```php
getIteration($iterationPublicId): \Timetoreply\Shortcut\Model\Iteration
```

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
$iterationPublicId = 56; // int | The unique ID of the Iteration.

try {
    $result = $apiInstance->getIteration($iterationPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getIteration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **iterationPublicId** | **int**| The unique ID of the Iteration. | |

### Return type

[**\Timetoreply\Shortcut\Model\Iteration**](../Model/Iteration.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getKeyResult()`

```php
getKeyResult($keyResultPublicId): \Timetoreply\Shortcut\Model\KeyResult
```

Get Key Result

Get Key Result returns information about a chosen Key Result.

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
$keyResultPublicId = 'keyResultPublicId_example'; // string | The ID of the Key Result.

try {
    $result = $apiInstance->getKeyResult($keyResultPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getKeyResult: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **keyResultPublicId** | **string**| The ID of the Key Result. | |

### Return type

[**\Timetoreply\Shortcut\Model\KeyResult**](../Model/KeyResult.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLabel()`

```php
getLabel($labelPublicId): \Timetoreply\Shortcut\Model\Label
```

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
$labelPublicId = 56; // int | The unique ID of the Label.

try {
    $result = $apiInstance->getLabel($labelPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getLabel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **labelPublicId** | **int**| The unique ID of the Label. | |

### Return type

[**\Timetoreply\Shortcut\Model\Label**](../Model/Label.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLinkedFile()`

```php
getLinkedFile($linkedFilePublicId): \Timetoreply\Shortcut\Model\LinkedFile
```

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
$linkedFilePublicId = 56; // int | The unique identifier of the linked file.

try {
    $result = $apiInstance->getLinkedFile($linkedFilePublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getLinkedFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **linkedFilePublicId** | **int**| The unique identifier of the linked file. | |

### Return type

[**\Timetoreply\Shortcut\Model\LinkedFile**](../Model/LinkedFile.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMember()`

```php
getMember($memberPublicId, $orgPublicId): \Timetoreply\Shortcut\Model\Member
```

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
$memberPublicId = 'memberPublicId_example'; // string | The Member's unique ID.
$orgPublicId = 'orgPublicId_example'; // string | The unique ID of the Organization to limit the lookup to.

try {
    $result = $apiInstance->getMember($memberPublicId, $orgPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **memberPublicId** | **string**| The Member&#39;s unique ID. | |
| **orgPublicId** | **string**| The unique ID of the Organization to limit the lookup to. | [optional] |

### Return type

[**\Timetoreply\Shortcut\Model\Member**](../Model/Member.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMilestone()`

```php
getMilestone($milestonePublicId): \Timetoreply\Shortcut\Model\Milestone
```

Get Milestone

(Deprecated: Use 'Get Objective') Get Milestone returns information about a chosen Milestone.

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
$milestonePublicId = 56; // int | The ID of the Milestone.

try {
    $result = $apiInstance->getMilestone($milestonePublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getMilestone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **milestonePublicId** | **int**| The ID of the Milestone. | |

### Return type

[**\Timetoreply\Shortcut\Model\Milestone**](../Model/Milestone.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getObjective()`

```php
getObjective($objectivePublicId): \Timetoreply\Shortcut\Model\Objective
```

Get Objective

Get Objective returns information about a chosen Objective.

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
$objectivePublicId = 56; // int | The ID of the Objective.

try {
    $result = $apiInstance->getObjective($objectivePublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getObjective: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **objectivePublicId** | **int**| The ID of the Objective. | |

### Return type

[**\Timetoreply\Shortcut\Model\Objective**](../Model/Objective.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProject()`

```php
getProject($projectPublicId): \Timetoreply\Shortcut\Model\Project
```

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
$projectPublicId = 56; // int | The unique ID of the Project.

try {
    $result = $apiInstance->getProject($projectPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectPublicId** | **int**| The unique ID of the Project. | |

### Return type

[**\Timetoreply\Shortcut\Model\Project**](../Model/Project.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRepository()`

```php
getRepository($repoPublicId): \Timetoreply\Shortcut\Model\Repository
```

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
$repoPublicId = 56; // int | The unique ID of the Repository.

try {
    $result = $apiInstance->getRepository($repoPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getRepository: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **repoPublicId** | **int**| The unique ID of the Repository. | |

### Return type

[**\Timetoreply\Shortcut\Model\Repository**](../Model/Repository.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStory()`

```php
getStory($storyPublicId): \Timetoreply\Shortcut\Model\Story
```

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
$storyPublicId = 56; // int | The ID of the Story.

try {
    $result = $apiInstance->getStory($storyPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getStory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storyPublicId** | **int**| The ID of the Story. | |

### Return type

[**\Timetoreply\Shortcut\Model\Story**](../Model/Story.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStoryComment()`

```php
getStoryComment($storyPublicId, $commentPublicId): \Timetoreply\Shortcut\Model\StoryComment
```

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
$storyPublicId = 56; // int | The ID of the Story that the Comment is in.
$commentPublicId = 56; // int | The ID of the Comment.

try {
    $result = $apiInstance->getStoryComment($storyPublicId, $commentPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getStoryComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storyPublicId** | **int**| The ID of the Story that the Comment is in. | |
| **commentPublicId** | **int**| The ID of the Comment. | |

### Return type

[**\Timetoreply\Shortcut\Model\StoryComment**](../Model/StoryComment.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStoryLink()`

```php
getStoryLink($storyLinkPublicId): \Timetoreply\Shortcut\Model\StoryLink
```

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
$storyLinkPublicId = 56; // int | The unique ID of the Story Link.

try {
    $result = $apiInstance->getStoryLink($storyLinkPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getStoryLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storyLinkPublicId** | **int**| The unique ID of the Story Link. | |

### Return type

[**\Timetoreply\Shortcut\Model\StoryLink**](../Model/StoryLink.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTask()`

```php
getTask($storyPublicId, $taskPublicId): \Timetoreply\Shortcut\Model\Task
```

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
$storyPublicId = 56; // int | The unique ID of the Story this Task is associated with.
$taskPublicId = 56; // int | The unique ID of the Task.

try {
    $result = $apiInstance->getTask($storyPublicId, $taskPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storyPublicId** | **int**| The unique ID of the Story this Task is associated with. | |
| **taskPublicId** | **int**| The unique ID of the Task. | |

### Return type

[**\Timetoreply\Shortcut\Model\Task**](../Model/Task.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWorkflow()`

```php
getWorkflow($workflowPublicId): \Timetoreply\Shortcut\Model\Workflow
```

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
$workflowPublicId = 56; // int | The ID of the Workflow.

try {
    $result = $apiInstance->getWorkflow($workflowPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getWorkflow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workflowPublicId** | **int**| The ID of the Workflow. | |

### Return type

[**\Timetoreply\Shortcut\Model\Workflow**](../Model/Workflow.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCategories()`

```php
listCategories(): \Timetoreply\Shortcut\Model\Category[]
```

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
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Timetoreply\Shortcut\Model\Category[]**](../Model/Category.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCategoryMilestones()`

```php
listCategoryMilestones($categoryPublicId): \Timetoreply\Shortcut\Model\Milestone[]
```

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
$categoryPublicId = 56; // int | The unique ID of the Category.

try {
    $result = $apiInstance->listCategoryMilestones($categoryPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listCategoryMilestones: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **categoryPublicId** | **int**| The unique ID of the Category. | |

### Return type

[**\Timetoreply\Shortcut\Model\Milestone[]**](../Model/Milestone.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCategoryObjectives()`

```php
listCategoryObjectives($categoryPublicId): \Timetoreply\Shortcut\Model\Milestone[]
```

List Category Objectives

Returns a list of all Objectives with the Category.

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
$categoryPublicId = 56; // int | The unique ID of the Category.

try {
    $result = $apiInstance->listCategoryObjectives($categoryPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listCategoryObjectives: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **categoryPublicId** | **int**| The unique ID of the Category. | |

### Return type

[**\Timetoreply\Shortcut\Model\Milestone[]**](../Model/Milestone.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCustomFields()`

```php
listCustomFields(): \Timetoreply\Shortcut\Model\CustomField[]
```

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
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Timetoreply\Shortcut\Model\CustomField[]**](../Model/CustomField.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDocs()`

```php
listDocs(): \Timetoreply\Shortcut\Model\DocSlim[]
```

List Docs

List Docs returns a list of Doc that the current user can read.

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
    $result = $apiInstance->listDocs();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listDocs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Timetoreply\Shortcut\Model\DocSlim[]**](../Model/DocSlim.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEntityTemplates()`

```php
listEntityTemplates(): \Timetoreply\Shortcut\Model\EntityTemplate[]
```

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
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Timetoreply\Shortcut\Model\EntityTemplate[]**](../Model/EntityTemplate.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEpicComments()`

```php
listEpicComments($epicPublicId): \Timetoreply\Shortcut\Model\ThreadedComment[]
```

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
$epicPublicId = 56; // int | The unique ID of the Epic.

try {
    $result = $apiInstance->listEpicComments($epicPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listEpicComments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **epicPublicId** | **int**| The unique ID of the Epic. | |

### Return type

[**\Timetoreply\Shortcut\Model\ThreadedComment[]**](../Model/ThreadedComment.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEpicHealths()`

```php
listEpicHealths($epicPublicId): \Timetoreply\Shortcut\Model\Health[]
```

List Epic Healths

List the history of health statuses for the specified Epic, most recent first.

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
$epicPublicId = 56; // int | The unique ID of the Epic.

try {
    $result = $apiInstance->listEpicHealths($epicPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listEpicHealths: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **epicPublicId** | **int**| The unique ID of the Epic. | |

### Return type

[**\Timetoreply\Shortcut\Model\Health[]**](../Model/Health.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEpicStories()`

```php
listEpicStories($epicPublicId, $includesDescription): \Timetoreply\Shortcut\Model\StorySlim[]
```

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
$epicPublicId = 56; // int | The unique ID of the Epic.
$includesDescription = True; // bool | A true/false boolean indicating whether to return Stories with their descriptions.

try {
    $result = $apiInstance->listEpicStories($epicPublicId, $includesDescription);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listEpicStories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **epicPublicId** | **int**| The unique ID of the Epic. | |
| **includesDescription** | **bool**| A true/false boolean indicating whether to return Stories with their descriptions. | [optional] |

### Return type

[**\Timetoreply\Shortcut\Model\StorySlim[]**](../Model/StorySlim.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEpics()`

```php
listEpics($includesDescription): \Timetoreply\Shortcut\Model\EpicSlim[]
```

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
$includesDescription = True; // bool | A true/false boolean indicating whether to return Epics with their descriptions.

try {
    $result = $apiInstance->listEpics($includesDescription);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listEpics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **includesDescription** | **bool**| A true/false boolean indicating whether to return Epics with their descriptions. | [optional] |

### Return type

[**\Timetoreply\Shortcut\Model\EpicSlim[]**](../Model/EpicSlim.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEpicsPaginated()`

```php
listEpicsPaginated($includesDescription, $page, $pageSize): \Timetoreply\Shortcut\Model\EpicPaginatedResults
```

List Epics Paginated

List Epics with pagination returns a paginated list of Epics and their attributes.

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
$includesDescription = True; // bool | A true/false boolean indicating whether to return Epics with their descriptions.
$page = 56; // int | The page number to return, starting with 1. Defaults to 1.
$pageSize = 56; // int | The number of Epics to return per page. Minimum 1, maximum 250, default 10.

try {
    $result = $apiInstance->listEpicsPaginated($includesDescription, $page, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listEpicsPaginated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **includesDescription** | **bool**| A true/false boolean indicating whether to return Epics with their descriptions. | [optional] |
| **page** | **int**| The page number to return, starting with 1. Defaults to 1. | [optional] |
| **pageSize** | **int**| The number of Epics to return per page. Minimum 1, maximum 250, default 10. | [optional] |

### Return type

[**\Timetoreply\Shortcut\Model\EpicPaginatedResults**](../Model/EpicPaginatedResults.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listFiles()`

```php
listFiles(): \Timetoreply\Shortcut\Model\UploadedFile[]
```

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
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Timetoreply\Shortcut\Model\UploadedFile[]**](../Model/UploadedFile.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listGroupStories()`

```php
listGroupStories($groupPublicId, $limit, $offset): \Timetoreply\Shortcut\Model\StorySlim[]
```

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
$groupPublicId = 'groupPublicId_example'; // string | The unique ID of the Group.
$limit = 56; // int | The maximum number of results to return. (Defaults to 1000, max 1000)
$offset = 56; // int | The offset at which to begin returning results. (Defaults to 0)

try {
    $result = $apiInstance->listGroupStories($groupPublicId, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listGroupStories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **groupPublicId** | **string**| The unique ID of the Group. | |
| **limit** | **int**| The maximum number of results to return. (Defaults to 1000, max 1000) | [optional] |
| **offset** | **int**| The offset at which to begin returning results. (Defaults to 0) | [optional] |

### Return type

[**\Timetoreply\Shortcut\Model\StorySlim[]**](../Model/StorySlim.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listGroups()`

```php
listGroups(): \Timetoreply\Shortcut\Model\Group[]
```

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
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Timetoreply\Shortcut\Model\Group[]**](../Model/Group.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listIterationStories()`

```php
listIterationStories($iterationPublicId, $includesDescription): \Timetoreply\Shortcut\Model\StorySlim[]
```

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
$iterationPublicId = 56; // int | The unique ID of the Iteration.
$includesDescription = True; // bool | A true/false boolean indicating whether to return Stories with their descriptions.

try {
    $result = $apiInstance->listIterationStories($iterationPublicId, $includesDescription);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listIterationStories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **iterationPublicId** | **int**| The unique ID of the Iteration. | |
| **includesDescription** | **bool**| A true/false boolean indicating whether to return Stories with their descriptions. | [optional] |

### Return type

[**\Timetoreply\Shortcut\Model\StorySlim[]**](../Model/StorySlim.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listIterations()`

```php
listIterations(): \Timetoreply\Shortcut\Model\IterationSlim[]
```

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
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Timetoreply\Shortcut\Model\IterationSlim[]**](../Model/IterationSlim.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLabelEpics()`

```php
listLabelEpics($labelPublicId): \Timetoreply\Shortcut\Model\EpicSlim[]
```

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
$labelPublicId = 56; // int | The unique ID of the Label.

try {
    $result = $apiInstance->listLabelEpics($labelPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listLabelEpics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **labelPublicId** | **int**| The unique ID of the Label. | |

### Return type

[**\Timetoreply\Shortcut\Model\EpicSlim[]**](../Model/EpicSlim.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLabelStories()`

```php
listLabelStories($labelPublicId, $includesDescription): \Timetoreply\Shortcut\Model\StorySlim[]
```

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
$labelPublicId = 56; // int | The unique ID of the Label.
$includesDescription = True; // bool | A true/false boolean indicating whether to return Stories with their descriptions.

try {
    $result = $apiInstance->listLabelStories($labelPublicId, $includesDescription);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listLabelStories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **labelPublicId** | **int**| The unique ID of the Label. | |
| **includesDescription** | **bool**| A true/false boolean indicating whether to return Stories with their descriptions. | [optional] |

### Return type

[**\Timetoreply\Shortcut\Model\StorySlim[]**](../Model/StorySlim.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLabels()`

```php
listLabels($slim): \Timetoreply\Shortcut\Model\Label[]
```

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
$slim = True; // bool | A true/false boolean indicating if the slim versions of the Label should be returned.

try {
    $result = $apiInstance->listLabels($slim);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listLabels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slim** | **bool**| A true/false boolean indicating if the slim versions of the Label should be returned. | [optional] |

### Return type

[**\Timetoreply\Shortcut\Model\Label[]**](../Model/Label.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLinkedFiles()`

```php
listLinkedFiles(): \Timetoreply\Shortcut\Model\LinkedFile[]
```

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
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Timetoreply\Shortcut\Model\LinkedFile[]**](../Model/LinkedFile.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMembers()`

```php
listMembers($orgPublicId, $disabled): \Timetoreply\Shortcut\Model\Member[]
```

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
$orgPublicId = 'orgPublicId_example'; // string | The unique ID of the Organization to limit the list to.
$disabled = True; // bool | Filter members by their disabled state. If true, return only disabled members. If false, return only enabled members.

try {
    $result = $apiInstance->listMembers($orgPublicId, $disabled);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orgPublicId** | **string**| The unique ID of the Organization to limit the list to. | [optional] |
| **disabled** | **bool**| Filter members by their disabled state. If true, return only disabled members. If false, return only enabled members. | [optional] |

### Return type

[**\Timetoreply\Shortcut\Model\Member[]**](../Model/Member.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMilestoneEpics()`

```php
listMilestoneEpics($milestonePublicId): \Timetoreply\Shortcut\Model\EpicSlim[]
```

List Milestone Epics

(Deprecated: Use 'List Objective Epics') List all of the Epics within the Milestone.

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
$milestonePublicId = 56; // int | The ID of the Milestone.

try {
    $result = $apiInstance->listMilestoneEpics($milestonePublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listMilestoneEpics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **milestonePublicId** | **int**| The ID of the Milestone. | |

### Return type

[**\Timetoreply\Shortcut\Model\EpicSlim[]**](../Model/EpicSlim.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMilestones()`

```php
listMilestones(): \Timetoreply\Shortcut\Model\Milestone[]
```

List Milestones

(Deprecated: Use 'List Objectives') List Milestones returns a list of all Milestones and their attributes.

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
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Timetoreply\Shortcut\Model\Milestone[]**](../Model/Milestone.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listObjectiveEpics()`

```php
listObjectiveEpics($objectivePublicId): \Timetoreply\Shortcut\Model\EpicSlim[]
```

List Objective Epics

List all of the Epics within the Objective.

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
$objectivePublicId = 56; // int | The ID of the Objective.

try {
    $result = $apiInstance->listObjectiveEpics($objectivePublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listObjectiveEpics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **objectivePublicId** | **int**| The ID of the Objective. | |

### Return type

[**\Timetoreply\Shortcut\Model\EpicSlim[]**](../Model/EpicSlim.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listObjectives()`

```php
listObjectives(): \Timetoreply\Shortcut\Model\Objective[]
```

List Objectives

List Objectives returns a list of all Objectives and their attributes.

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
    $result = $apiInstance->listObjectives();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listObjectives: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Timetoreply\Shortcut\Model\Objective[]**](../Model/Objective.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProjects()`

```php
listProjects(): \Timetoreply\Shortcut\Model\Project[]
```

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
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Timetoreply\Shortcut\Model\Project[]**](../Model/Project.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listRepositories()`

```php
listRepositories(): \Timetoreply\Shortcut\Model\Repository[]
```

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
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Timetoreply\Shortcut\Model\Repository[]**](../Model/Repository.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listStories()`

```php
listStories($projectPublicId, $includesDescription): \Timetoreply\Shortcut\Model\StorySlim[]
```

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
$projectPublicId = 56; // int | The unique ID of the Project.
$includesDescription = True; // bool | A true/false boolean indicating whether to return Stories with their descriptions.

try {
    $result = $apiInstance->listStories($projectPublicId, $includesDescription);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listStories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectPublicId** | **int**| The unique ID of the Project. | |
| **includesDescription** | **bool**| A true/false boolean indicating whether to return Stories with their descriptions. | [optional] |

### Return type

[**\Timetoreply\Shortcut\Model\StorySlim[]**](../Model/StorySlim.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listStoryComment()`

```php
listStoryComment($storyPublicId): \Timetoreply\Shortcut\Model\StoryComment[]
```

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
$storyPublicId = 56; // int | The ID of the Story that the Comment is in.

try {
    $result = $apiInstance->listStoryComment($storyPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listStoryComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storyPublicId** | **int**| The ID of the Story that the Comment is in. | |

### Return type

[**\Timetoreply\Shortcut\Model\StoryComment[]**](../Model/StoryComment.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWorkflows()`

```php
listWorkflows(): \Timetoreply\Shortcut\Model\Workflow[]
```

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
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Timetoreply\Shortcut\Model\Workflow[]**](../Model/Workflow.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `search()`

```php
search($query, $pageSize, $detail, $next, $entityTypes): \Timetoreply\Shortcut\Model\SearchResults
```

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
$query = 'query_example'; // string | See our help center article on [search operators](https://help.shortcut.com/hc/en-us/articles/360000046646-Search-Operators)
$pageSize = 56; // int | The number of search results to include in a page. Minimum of 1 and maximum of 250.
$detail = 'detail_example'; // string | The amount of detail included in each result item.    \"full\" will include all descriptions and comments and more fields on    related items such as pull requests, branches and tasks.    \"slim\" omits larger fulltext fields such as descriptions and comments    and only references related items by id.    The default is \"full\".
$next = 'next_example'; // string | The next page token.
$entityTypes = array('entityTypes_example'); // string[] | A collection of entity_types to search. Defaults to story and epic. Supports: epic, iteration, objective, story.

try {
    $result = $apiInstance->search($query, $pageSize, $detail, $next, $entityTypes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->search: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query** | **string**| See our help center article on [search operators](https://help.shortcut.com/hc/en-us/articles/360000046646-Search-Operators) | |
| **pageSize** | **int**| The number of search results to include in a page. Minimum of 1 and maximum of 250. | [optional] |
| **detail** | **string**| The amount of detail included in each result item.    \&quot;full\&quot; will include all descriptions and comments and more fields on    related items such as pull requests, branches and tasks.    \&quot;slim\&quot; omits larger fulltext fields such as descriptions and comments    and only references related items by id.    The default is \&quot;full\&quot;. | [optional] |
| **next** | **string**| The next page token. | [optional] |
| **entityTypes** | [**string[]**](../Model/string.md)| A collection of entity_types to search. Defaults to story and epic. Supports: epic, iteration, objective, story. | [optional] |

### Return type

[**\Timetoreply\Shortcut\Model\SearchResults**](../Model/SearchResults.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchEpics()`

```php
searchEpics($query, $pageSize, $detail, $next, $entityTypes): \Timetoreply\Shortcut\Model\EpicSearchResults
```

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
$query = 'query_example'; // string | See our help center article on [search operators](https://help.shortcut.com/hc/en-us/articles/360000046646-Search-Operators)
$pageSize = 56; // int | The number of search results to include in a page. Minimum of 1 and maximum of 250.
$detail = 'detail_example'; // string | The amount of detail included in each result item.    \"full\" will include all descriptions and comments and more fields on    related items such as pull requests, branches and tasks.    \"slim\" omits larger fulltext fields such as descriptions and comments    and only references related items by id.    The default is \"full\".
$next = 'next_example'; // string | The next page token.
$entityTypes = array('entityTypes_example'); // string[] | A collection of entity_types to search. Defaults to story and epic. Supports: epic, iteration, objective, story.

try {
    $result = $apiInstance->searchEpics($query, $pageSize, $detail, $next, $entityTypes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->searchEpics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query** | **string**| See our help center article on [search operators](https://help.shortcut.com/hc/en-us/articles/360000046646-Search-Operators) | |
| **pageSize** | **int**| The number of search results to include in a page. Minimum of 1 and maximum of 250. | [optional] |
| **detail** | **string**| The amount of detail included in each result item.    \&quot;full\&quot; will include all descriptions and comments and more fields on    related items such as pull requests, branches and tasks.    \&quot;slim\&quot; omits larger fulltext fields such as descriptions and comments    and only references related items by id.    The default is \&quot;full\&quot;. | [optional] |
| **next** | **string**| The next page token. | [optional] |
| **entityTypes** | [**string[]**](../Model/string.md)| A collection of entity_types to search. Defaults to story and epic. Supports: epic, iteration, objective, story. | [optional] |

### Return type

[**\Timetoreply\Shortcut\Model\EpicSearchResults**](../Model/EpicSearchResults.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchIterations()`

```php
searchIterations($query, $pageSize, $detail, $next, $entityTypes): \Timetoreply\Shortcut\Model\IterationSearchResults
```

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
$query = 'query_example'; // string | See our help center article on [search operators](https://help.shortcut.com/hc/en-us/articles/360000046646-Search-Operators)
$pageSize = 56; // int | The number of search results to include in a page. Minimum of 1 and maximum of 250.
$detail = 'detail_example'; // string | The amount of detail included in each result item.    \"full\" will include all descriptions and comments and more fields on    related items such as pull requests, branches and tasks.    \"slim\" omits larger fulltext fields such as descriptions and comments    and only references related items by id.    The default is \"full\".
$next = 'next_example'; // string | The next page token.
$entityTypes = array('entityTypes_example'); // string[] | A collection of entity_types to search. Defaults to story and epic. Supports: epic, iteration, objective, story.

try {
    $result = $apiInstance->searchIterations($query, $pageSize, $detail, $next, $entityTypes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->searchIterations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query** | **string**| See our help center article on [search operators](https://help.shortcut.com/hc/en-us/articles/360000046646-Search-Operators) | |
| **pageSize** | **int**| The number of search results to include in a page. Minimum of 1 and maximum of 250. | [optional] |
| **detail** | **string**| The amount of detail included in each result item.    \&quot;full\&quot; will include all descriptions and comments and more fields on    related items such as pull requests, branches and tasks.    \&quot;slim\&quot; omits larger fulltext fields such as descriptions and comments    and only references related items by id.    The default is \&quot;full\&quot;. | [optional] |
| **next** | **string**| The next page token. | [optional] |
| **entityTypes** | [**string[]**](../Model/string.md)| A collection of entity_types to search. Defaults to story and epic. Supports: epic, iteration, objective, story. | [optional] |

### Return type

[**\Timetoreply\Shortcut\Model\IterationSearchResults**](../Model/IterationSearchResults.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchMilestones()`

```php
searchMilestones($query, $pageSize, $detail, $next, $entityTypes): \Timetoreply\Shortcut\Model\ObjectiveSearchResults
```

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
$query = 'query_example'; // string | See our help center article on [search operators](https://help.shortcut.com/hc/en-us/articles/360000046646-Search-Operators)
$pageSize = 56; // int | The number of search results to include in a page. Minimum of 1 and maximum of 250.
$detail = 'detail_example'; // string | The amount of detail included in each result item.    \"full\" will include all descriptions and comments and more fields on    related items such as pull requests, branches and tasks.    \"slim\" omits larger fulltext fields such as descriptions and comments    and only references related items by id.    The default is \"full\".
$next = 'next_example'; // string | The next page token.
$entityTypes = array('entityTypes_example'); // string[] | A collection of entity_types to search. Defaults to story and epic. Supports: epic, iteration, objective, story.

try {
    $result = $apiInstance->searchMilestones($query, $pageSize, $detail, $next, $entityTypes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->searchMilestones: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query** | **string**| See our help center article on [search operators](https://help.shortcut.com/hc/en-us/articles/360000046646-Search-Operators) | |
| **pageSize** | **int**| The number of search results to include in a page. Minimum of 1 and maximum of 250. | [optional] |
| **detail** | **string**| The amount of detail included in each result item.    \&quot;full\&quot; will include all descriptions and comments and more fields on    related items such as pull requests, branches and tasks.    \&quot;slim\&quot; omits larger fulltext fields such as descriptions and comments    and only references related items by id.    The default is \&quot;full\&quot;. | [optional] |
| **next** | **string**| The next page token. | [optional] |
| **entityTypes** | [**string[]**](../Model/string.md)| A collection of entity_types to search. Defaults to story and epic. Supports: epic, iteration, objective, story. | [optional] |

### Return type

[**\Timetoreply\Shortcut\Model\ObjectiveSearchResults**](../Model/ObjectiveSearchResults.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchObjectives()`

```php
searchObjectives($query, $pageSize, $detail, $next, $entityTypes): \Timetoreply\Shortcut\Model\ObjectiveSearchResults
```

Search Objectives

Search Objectives lets you search Objectives based on desired parameters. Since ordering of results can change over time (due to search ranking decay, new Objectives being created), the `next` value from the previous response can be used as the path and query string for the next page to ensure stable ordering.

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
$query = 'query_example'; // string | See our help center article on [search operators](https://help.shortcut.com/hc/en-us/articles/360000046646-Search-Operators)
$pageSize = 56; // int | The number of search results to include in a page. Minimum of 1 and maximum of 250.
$detail = 'detail_example'; // string | The amount of detail included in each result item.    \"full\" will include all descriptions and comments and more fields on    related items such as pull requests, branches and tasks.    \"slim\" omits larger fulltext fields such as descriptions and comments    and only references related items by id.    The default is \"full\".
$next = 'next_example'; // string | The next page token.
$entityTypes = array('entityTypes_example'); // string[] | A collection of entity_types to search. Defaults to story and epic. Supports: epic, iteration, objective, story.

try {
    $result = $apiInstance->searchObjectives($query, $pageSize, $detail, $next, $entityTypes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->searchObjectives: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query** | **string**| See our help center article on [search operators](https://help.shortcut.com/hc/en-us/articles/360000046646-Search-Operators) | |
| **pageSize** | **int**| The number of search results to include in a page. Minimum of 1 and maximum of 250. | [optional] |
| **detail** | **string**| The amount of detail included in each result item.    \&quot;full\&quot; will include all descriptions and comments and more fields on    related items such as pull requests, branches and tasks.    \&quot;slim\&quot; omits larger fulltext fields such as descriptions and comments    and only references related items by id.    The default is \&quot;full\&quot;. | [optional] |
| **next** | **string**| The next page token. | [optional] |
| **entityTypes** | [**string[]**](../Model/string.md)| A collection of entity_types to search. Defaults to story and epic. Supports: epic, iteration, objective, story. | [optional] |

### Return type

[**\Timetoreply\Shortcut\Model\ObjectiveSearchResults**](../Model/ObjectiveSearchResults.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchStories()`

```php
searchStories($query, $pageSize, $detail, $next, $entityTypes): \Timetoreply\Shortcut\Model\StorySearchResults
```

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
$query = 'query_example'; // string | See our help center article on [search operators](https://help.shortcut.com/hc/en-us/articles/360000046646-Search-Operators)
$pageSize = 56; // int | The number of search results to include in a page. Minimum of 1 and maximum of 250.
$detail = 'detail_example'; // string | The amount of detail included in each result item.    \"full\" will include all descriptions and comments and more fields on    related items such as pull requests, branches and tasks.    \"slim\" omits larger fulltext fields such as descriptions and comments    and only references related items by id.    The default is \"full\".
$next = 'next_example'; // string | The next page token.
$entityTypes = array('entityTypes_example'); // string[] | A collection of entity_types to search. Defaults to story and epic. Supports: epic, iteration, objective, story.

try {
    $result = $apiInstance->searchStories($query, $pageSize, $detail, $next, $entityTypes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->searchStories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query** | **string**| See our help center article on [search operators](https://help.shortcut.com/hc/en-us/articles/360000046646-Search-Operators) | |
| **pageSize** | **int**| The number of search results to include in a page. Minimum of 1 and maximum of 250. | [optional] |
| **detail** | **string**| The amount of detail included in each result item.    \&quot;full\&quot; will include all descriptions and comments and more fields on    related items such as pull requests, branches and tasks.    \&quot;slim\&quot; omits larger fulltext fields such as descriptions and comments    and only references related items by id.    The default is \&quot;full\&quot;. | [optional] |
| **next** | **string**| The next page token. | [optional] |
| **entityTypes** | [**string[]**](../Model/string.md)| A collection of entity_types to search. Defaults to story and epic. Supports: epic, iteration, objective, story. | [optional] |

### Return type

[**\Timetoreply\Shortcut\Model\StorySearchResults**](../Model/StorySearchResults.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchStoriesOld()`

```php
searchStoriesOld($searchStories): \Timetoreply\Shortcut\Model\StorySlim[]
```

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
$searchStories = new \Timetoreply\Shortcut\Model\SearchStories(); // \Timetoreply\Shortcut\Model\SearchStories

try {
    $result = $apiInstance->searchStoriesOld($searchStories);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->searchStoriesOld: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **searchStories** | [**\Timetoreply\Shortcut\Model\SearchStories**](../Model/SearchStories.md)|  | |

### Return type

[**\Timetoreply\Shortcut\Model\StorySlim[]**](../Model/StorySlim.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storyHistory()`

```php
storyHistory($storyPublicId): \Timetoreply\Shortcut\Model\History[]
```

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
$storyPublicId = 56; // int | The ID of the Story.

try {
    $result = $apiInstance->storyHistory($storyPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->storyHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storyPublicId** | **int**| The ID of the Story. | |

### Return type

[**\Timetoreply\Shortcut\Model\History[]**](../Model/History.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unlinkCommentThreadFromSlack()`

```php
unlinkCommentThreadFromSlack($storyPublicId, $commentPublicId): \Timetoreply\Shortcut\Model\StoryComment
```

Unlink Comment thread from Slack

Unlinks a Comment from its linked Slack thread (Comment replies and Slack replies will no longer be synced)

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
$storyPublicId = 56; // int | The ID of the Story to unlink.
$commentPublicId = 56; // int | The ID of the Comment to unlink.

try {
    $result = $apiInstance->unlinkCommentThreadFromSlack($storyPublicId, $commentPublicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->unlinkCommentThreadFromSlack: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storyPublicId** | **int**| The ID of the Story to unlink. | |
| **commentPublicId** | **int**| The ID of the Comment to unlink. | |

### Return type

[**\Timetoreply\Shortcut\Model\StoryComment**](../Model/StoryComment.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unlinkProductboardFromEpic()`

```php
unlinkProductboardFromEpic($epicPublicId)
```

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
$epicPublicId = 56; // int | The unique ID of the Epic.

try {
    $apiInstance->unlinkProductboardFromEpic($epicPublicId);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->unlinkProductboardFromEpic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **epicPublicId** | **int**| The unique ID of the Epic. | |

### Return type

void (empty response body)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCategory()`

```php
updateCategory($categoryPublicId, $updateCategory): \Timetoreply\Shortcut\Model\Category
```

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
$categoryPublicId = 56; // int | The unique ID of the Category you wish to update.
$updateCategory = new \Timetoreply\Shortcut\Model\UpdateCategory(); // \Timetoreply\Shortcut\Model\UpdateCategory

try {
    $result = $apiInstance->updateCategory($categoryPublicId, $updateCategory);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **categoryPublicId** | **int**| The unique ID of the Category you wish to update. | |
| **updateCategory** | [**\Timetoreply\Shortcut\Model\UpdateCategory**](../Model/UpdateCategory.md)|  | |

### Return type

[**\Timetoreply\Shortcut\Model\Category**](../Model/Category.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCustomField()`

```php
updateCustomField($customFieldPublicId, $updateCustomField): \Timetoreply\Shortcut\Model\CustomField
```

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
$customFieldPublicId = 'customFieldPublicId_example'; // string | The unique ID of the CustomField.
$updateCustomField = new \Timetoreply\Shortcut\Model\UpdateCustomField(); // \Timetoreply\Shortcut\Model\UpdateCustomField

try {
    $result = $apiInstance->updateCustomField($customFieldPublicId, $updateCustomField);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateCustomField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customFieldPublicId** | **string**| The unique ID of the CustomField. | |
| **updateCustomField** | [**\Timetoreply\Shortcut\Model\UpdateCustomField**](../Model/UpdateCustomField.md)|  | |

### Return type

[**\Timetoreply\Shortcut\Model\CustomField**](../Model/CustomField.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEntityTemplate()`

```php
updateEntityTemplate($entityTemplatePublicId, $updateEntityTemplate): \Timetoreply\Shortcut\Model\EntityTemplate
```

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
$entityTemplatePublicId = 'entityTemplatePublicId_example'; // string | The unique ID of the template to be updated.
$updateEntityTemplate = new \Timetoreply\Shortcut\Model\UpdateEntityTemplate(); // \Timetoreply\Shortcut\Model\UpdateEntityTemplate | Request parameters for changing either a template's name or any of   the attributes it is designed to pre-populate.

try {
    $result = $apiInstance->updateEntityTemplate($entityTemplatePublicId, $updateEntityTemplate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateEntityTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entityTemplatePublicId** | **string**| The unique ID of the template to be updated. | |
| **updateEntityTemplate** | [**\Timetoreply\Shortcut\Model\UpdateEntityTemplate**](../Model/UpdateEntityTemplate.md)| Request parameters for changing either a template&#39;s name or any of   the attributes it is designed to pre-populate. | |

### Return type

[**\Timetoreply\Shortcut\Model\EntityTemplate**](../Model/EntityTemplate.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEpic()`

```php
updateEpic($epicPublicId, $updateEpic): \Timetoreply\Shortcut\Model\Epic
```

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
$epicPublicId = 56; // int | The unique ID of the Epic.
$updateEpic = new \Timetoreply\Shortcut\Model\UpdateEpic(); // \Timetoreply\Shortcut\Model\UpdateEpic

try {
    $result = $apiInstance->updateEpic($epicPublicId, $updateEpic);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateEpic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **epicPublicId** | **int**| The unique ID of the Epic. | |
| **updateEpic** | [**\Timetoreply\Shortcut\Model\UpdateEpic**](../Model/UpdateEpic.md)|  | |

### Return type

[**\Timetoreply\Shortcut\Model\Epic**](../Model/Epic.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEpicComment()`

```php
updateEpicComment($epicPublicId, $commentPublicId, $updateComment): \Timetoreply\Shortcut\Model\ThreadedComment
```

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
$epicPublicId = 56; // int | The ID of the associated Epic.
$commentPublicId = 56; // int | The ID of the Comment.
$updateComment = new \Timetoreply\Shortcut\Model\UpdateComment(); // \Timetoreply\Shortcut\Model\UpdateComment

try {
    $result = $apiInstance->updateEpicComment($epicPublicId, $commentPublicId, $updateComment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateEpicComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **epicPublicId** | **int**| The ID of the associated Epic. | |
| **commentPublicId** | **int**| The ID of the Comment. | |
| **updateComment** | [**\Timetoreply\Shortcut\Model\UpdateComment**](../Model/UpdateComment.md)|  | |

### Return type

[**\Timetoreply\Shortcut\Model\ThreadedComment**](../Model/ThreadedComment.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFile()`

```php
updateFile($filePublicId, $updateFile): \Timetoreply\Shortcut\Model\UploadedFile
```

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
$filePublicId = 56; // int | The unique ID assigned to the file in Shortcut.
$updateFile = new \Timetoreply\Shortcut\Model\UpdateFile(); // \Timetoreply\Shortcut\Model\UpdateFile

try {
    $result = $apiInstance->updateFile($filePublicId, $updateFile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filePublicId** | **int**| The unique ID assigned to the file in Shortcut. | |
| **updateFile** | [**\Timetoreply\Shortcut\Model\UpdateFile**](../Model/UpdateFile.md)|  | |

### Return type

[**\Timetoreply\Shortcut\Model\UploadedFile**](../Model/UploadedFile.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateGroup()`

```php
updateGroup($groupPublicId, $updateGroup): \Timetoreply\Shortcut\Model\Group
```

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
$groupPublicId = 'groupPublicId_example'; // string | The unique ID of the Group.
$updateGroup = new \Timetoreply\Shortcut\Model\UpdateGroup(); // \Timetoreply\Shortcut\Model\UpdateGroup

try {
    $result = $apiInstance->updateGroup($groupPublicId, $updateGroup);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **groupPublicId** | **string**| The unique ID of the Group. | |
| **updateGroup** | [**\Timetoreply\Shortcut\Model\UpdateGroup**](../Model/UpdateGroup.md)|  | |

### Return type

[**\Timetoreply\Shortcut\Model\Group**](../Model/Group.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateHealth()`

```php
updateHealth($healthPublicId, $updateHealth): \Timetoreply\Shortcut\Model\Health
```

Update Health

Update an existing health status by its ID.

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
$healthPublicId = 'healthPublicId_example'; // string | The unique ID of the Health record.
$updateHealth = new \Timetoreply\Shortcut\Model\UpdateHealth(); // \Timetoreply\Shortcut\Model\UpdateHealth

try {
    $result = $apiInstance->updateHealth($healthPublicId, $updateHealth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateHealth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **healthPublicId** | **string**| The unique ID of the Health record. | |
| **updateHealth** | [**\Timetoreply\Shortcut\Model\UpdateHealth**](../Model/UpdateHealth.md)|  | |

### Return type

[**\Timetoreply\Shortcut\Model\Health**](../Model/Health.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateIteration()`

```php
updateIteration($iterationPublicId, $updateIteration): \Timetoreply\Shortcut\Model\Iteration
```

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
$iterationPublicId = 56; // int | The unique ID of the Iteration.
$updateIteration = new \Timetoreply\Shortcut\Model\UpdateIteration(); // \Timetoreply\Shortcut\Model\UpdateIteration

try {
    $result = $apiInstance->updateIteration($iterationPublicId, $updateIteration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateIteration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **iterationPublicId** | **int**| The unique ID of the Iteration. | |
| **updateIteration** | [**\Timetoreply\Shortcut\Model\UpdateIteration**](../Model/UpdateIteration.md)|  | |

### Return type

[**\Timetoreply\Shortcut\Model\Iteration**](../Model/Iteration.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateKeyResult()`

```php
updateKeyResult($keyResultPublicId, $updateKeyResult): \Timetoreply\Shortcut\Model\KeyResult
```

Update Key Result

Update Key Result allows updating a Key Result's name or initial, observed, or target values.

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
$keyResultPublicId = 'keyResultPublicId_example'; // string | The ID of the Key Result.
$updateKeyResult = new \Timetoreply\Shortcut\Model\UpdateKeyResult(); // \Timetoreply\Shortcut\Model\UpdateKeyResult

try {
    $result = $apiInstance->updateKeyResult($keyResultPublicId, $updateKeyResult);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateKeyResult: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **keyResultPublicId** | **string**| The ID of the Key Result. | |
| **updateKeyResult** | [**\Timetoreply\Shortcut\Model\UpdateKeyResult**](../Model/UpdateKeyResult.md)|  | |

### Return type

[**\Timetoreply\Shortcut\Model\KeyResult**](../Model/KeyResult.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLabel()`

```php
updateLabel($labelPublicId, $updateLabel): \Timetoreply\Shortcut\Model\Label
```

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
$labelPublicId = 56; // int | The unique ID of the Label you wish to update.
$updateLabel = new \Timetoreply\Shortcut\Model\UpdateLabel(); // \Timetoreply\Shortcut\Model\UpdateLabel

try {
    $result = $apiInstance->updateLabel($labelPublicId, $updateLabel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateLabel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **labelPublicId** | **int**| The unique ID of the Label you wish to update. | |
| **updateLabel** | [**\Timetoreply\Shortcut\Model\UpdateLabel**](../Model/UpdateLabel.md)|  | |

### Return type

[**\Timetoreply\Shortcut\Model\Label**](../Model/Label.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLinkedFile()`

```php
updateLinkedFile($linkedFilePublicId, $updateLinkedFile): \Timetoreply\Shortcut\Model\LinkedFile
```

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
$linkedFilePublicId = 56; // int | The unique identifier of the linked file.
$updateLinkedFile = new \Timetoreply\Shortcut\Model\UpdateLinkedFile(); // \Timetoreply\Shortcut\Model\UpdateLinkedFile

try {
    $result = $apiInstance->updateLinkedFile($linkedFilePublicId, $updateLinkedFile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateLinkedFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **linkedFilePublicId** | **int**| The unique identifier of the linked file. | |
| **updateLinkedFile** | [**\Timetoreply\Shortcut\Model\UpdateLinkedFile**](../Model/UpdateLinkedFile.md)|  | |

### Return type

[**\Timetoreply\Shortcut\Model\LinkedFile**](../Model/LinkedFile.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMilestone()`

```php
updateMilestone($milestonePublicId, $updateMilestone): \Timetoreply\Shortcut\Model\Milestone
```

Update Milestone

(Deprecated: Use 'Update Objective') Update Milestone can be used to update Milestone properties.

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
$milestonePublicId = 56; // int | The ID of the Milestone.
$updateMilestone = new \Timetoreply\Shortcut\Model\UpdateMilestone(); // \Timetoreply\Shortcut\Model\UpdateMilestone

try {
    $result = $apiInstance->updateMilestone($milestonePublicId, $updateMilestone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateMilestone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **milestonePublicId** | **int**| The ID of the Milestone. | |
| **updateMilestone** | [**\Timetoreply\Shortcut\Model\UpdateMilestone**](../Model/UpdateMilestone.md)|  | |

### Return type

[**\Timetoreply\Shortcut\Model\Milestone**](../Model/Milestone.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMultipleStories()`

```php
updateMultipleStories($updateStories): \Timetoreply\Shortcut\Model\StorySlim[]
```

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
$updateStories = new \Timetoreply\Shortcut\Model\UpdateStories(); // \Timetoreply\Shortcut\Model\UpdateStories

try {
    $result = $apiInstance->updateMultipleStories($updateStories);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateMultipleStories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **updateStories** | [**\Timetoreply\Shortcut\Model\UpdateStories**](../Model/UpdateStories.md)|  | |

### Return type

[**\Timetoreply\Shortcut\Model\StorySlim[]**](../Model/StorySlim.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateObjective()`

```php
updateObjective($objectivePublicId, $updateObjective): \Timetoreply\Shortcut\Model\Objective
```

Update Objective

Update Objective can be used to update Objective properties.

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
$objectivePublicId = 56; // int | The ID of the Objective.
$updateObjective = new \Timetoreply\Shortcut\Model\UpdateObjective(); // \Timetoreply\Shortcut\Model\UpdateObjective

try {
    $result = $apiInstance->updateObjective($objectivePublicId, $updateObjective);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateObjective: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **objectivePublicId** | **int**| The ID of the Objective. | |
| **updateObjective** | [**\Timetoreply\Shortcut\Model\UpdateObjective**](../Model/UpdateObjective.md)|  | |

### Return type

[**\Timetoreply\Shortcut\Model\Objective**](../Model/Objective.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProject()`

```php
updateProject($projectPublicId, $updateProject): \Timetoreply\Shortcut\Model\Project
```

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
$projectPublicId = 56; // int | The unique ID of the Project.
$updateProject = new \Timetoreply\Shortcut\Model\UpdateProject(); // \Timetoreply\Shortcut\Model\UpdateProject

try {
    $result = $apiInstance->updateProject($projectPublicId, $updateProject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectPublicId** | **int**| The unique ID of the Project. | |
| **updateProject** | [**\Timetoreply\Shortcut\Model\UpdateProject**](../Model/UpdateProject.md)|  | |

### Return type

[**\Timetoreply\Shortcut\Model\Project**](../Model/Project.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateStory()`

```php
updateStory($storyPublicId, $updateStory): \Timetoreply\Shortcut\Model\Story
```

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
$storyPublicId = 56; // int | The unique identifier of this story.
$updateStory = new \Timetoreply\Shortcut\Model\UpdateStory(); // \Timetoreply\Shortcut\Model\UpdateStory

try {
    $result = $apiInstance->updateStory($storyPublicId, $updateStory);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateStory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storyPublicId** | **int**| The unique identifier of this story. | |
| **updateStory** | [**\Timetoreply\Shortcut\Model\UpdateStory**](../Model/UpdateStory.md)|  | |

### Return type

[**\Timetoreply\Shortcut\Model\Story**](../Model/Story.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateStoryComment()`

```php
updateStoryComment($storyPublicId, $commentPublicId, $updateStoryComment): \Timetoreply\Shortcut\Model\StoryComment
```

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
$storyPublicId = 56; // int | The ID of the Story that the Comment is in.
$commentPublicId = 56; // int | The ID of the Comment
$updateStoryComment = new \Timetoreply\Shortcut\Model\UpdateStoryComment(); // \Timetoreply\Shortcut\Model\UpdateStoryComment

try {
    $result = $apiInstance->updateStoryComment($storyPublicId, $commentPublicId, $updateStoryComment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateStoryComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storyPublicId** | **int**| The ID of the Story that the Comment is in. | |
| **commentPublicId** | **int**| The ID of the Comment | |
| **updateStoryComment** | [**\Timetoreply\Shortcut\Model\UpdateStoryComment**](../Model/UpdateStoryComment.md)|  | |

### Return type

[**\Timetoreply\Shortcut\Model\StoryComment**](../Model/StoryComment.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateStoryLink()`

```php
updateStoryLink($storyLinkPublicId, $updateStoryLink): \Timetoreply\Shortcut\Model\StoryLink
```

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
$storyLinkPublicId = 56; // int | The unique ID of the Story Link.
$updateStoryLink = new \Timetoreply\Shortcut\Model\UpdateStoryLink(); // \Timetoreply\Shortcut\Model\UpdateStoryLink

try {
    $result = $apiInstance->updateStoryLink($storyLinkPublicId, $updateStoryLink);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateStoryLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storyLinkPublicId** | **int**| The unique ID of the Story Link. | |
| **updateStoryLink** | [**\Timetoreply\Shortcut\Model\UpdateStoryLink**](../Model/UpdateStoryLink.md)|  | |

### Return type

[**\Timetoreply\Shortcut\Model\StoryLink**](../Model/StoryLink.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTask()`

```php
updateTask($storyPublicId, $taskPublicId, $updateTask): \Timetoreply\Shortcut\Model\Task
```

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
$storyPublicId = 56; // int | The unique identifier of the parent Story.
$taskPublicId = 56; // int | The unique identifier of the Task you wish to update.
$updateTask = new \Timetoreply\Shortcut\Model\UpdateTask(); // \Timetoreply\Shortcut\Model\UpdateTask

try {
    $result = $apiInstance->updateTask($storyPublicId, $taskPublicId, $updateTask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storyPublicId** | **int**| The unique identifier of the parent Story. | |
| **taskPublicId** | **int**| The unique identifier of the Task you wish to update. | |
| **updateTask** | [**\Timetoreply\Shortcut\Model\UpdateTask**](../Model/UpdateTask.md)|  | |

### Return type

[**\Timetoreply\Shortcut\Model\Task**](../Model/Task.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadFiles()`

```php
uploadFiles($file0, $storyId, $file1, $file2, $file3): \Timetoreply\Shortcut\Model\UploadedFile[]
```

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
$file0 = '/path/to/file.txt'; // \SplFileObject | A file upload. At least one is required.
$storyId = 56; // int | The story ID that these files will be associated with.
$file1 = '/path/to/file.txt'; // \SplFileObject | Optional additional files.
$file2 = '/path/to/file.txt'; // \SplFileObject | Optional additional files.
$file3 = '/path/to/file.txt'; // \SplFileObject | Optional additional files.

try {
    $result = $apiInstance->uploadFiles($file0, $storyId, $file1, $file2, $file3);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->uploadFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file0** | **\SplFileObject****\SplFileObject**| A file upload. At least one is required. | |
| **storyId** | **int**| The story ID that these files will be associated with. | [optional] |
| **file1** | **\SplFileObject****\SplFileObject**| Optional additional files. | [optional] |
| **file2** | **\SplFileObject****\SplFileObject**| Optional additional files. | [optional] |
| **file3** | **\SplFileObject****\SplFileObject**| Optional additional files. | [optional] |

### Return type

[**\Timetoreply\Shortcut\Model\UploadedFile[]**](../Model/UploadedFile.md)

### Authorization

[api_token](../../README.md#api_token)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
