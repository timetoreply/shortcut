# timetoreply/shortcut

Shortcut API


## Installation & Usage

### Requirements

PHP 8.1 and later.

### Installation

The library can be installed via Composer:

```sh
composer require timetoreply/shortcut
```

Then run `composer install`

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
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

## API Endpoints

All URIs are relative to *https://api.app.shortcut.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**createCategory**](docs/Api/DefaultApi.md#createcategory) | **POST** /api/v3/categories | Create Category
*DefaultApi* | [**createDoc**](docs/Api/DefaultApi.md#createdoc) | **POST** /api/v3/documents | Create Doc
*DefaultApi* | [**createEntityTemplate**](docs/Api/DefaultApi.md#createentitytemplate) | **POST** /api/v3/entity-templates | Create Entity Template
*DefaultApi* | [**createEpic**](docs/Api/DefaultApi.md#createepic) | **POST** /api/v3/epics | Create Epic
*DefaultApi* | [**createEpicComment**](docs/Api/DefaultApi.md#createepiccomment) | **POST** /api/v3/epics/{epic-public-id}/comments | Create Epic Comment
*DefaultApi* | [**createEpicCommentComment**](docs/Api/DefaultApi.md#createepiccommentcomment) | **POST** /api/v3/epics/{epic-public-id}/comments/{comment-public-id} | Create Epic Comment Comment
*DefaultApi* | [**createEpicHealth**](docs/Api/DefaultApi.md#createepichealth) | **POST** /api/v3/epics/{epic-public-id}/health | Create Epic Health
*DefaultApi* | [**createGenericIntegration**](docs/Api/DefaultApi.md#creategenericintegration) | **POST** /api/v3/integrations/webhook | Create Generic Integration
*DefaultApi* | [**createGroup**](docs/Api/DefaultApi.md#creategroup) | **POST** /api/v3/groups | Create Group
*DefaultApi* | [**createIteration**](docs/Api/DefaultApi.md#createiteration) | **POST** /api/v3/iterations | Create Iteration
*DefaultApi* | [**createLabel**](docs/Api/DefaultApi.md#createlabel) | **POST** /api/v3/labels | Create Label
*DefaultApi* | [**createLinkedFile**](docs/Api/DefaultApi.md#createlinkedfile) | **POST** /api/v3/linked-files | Create Linked File
*DefaultApi* | [**createMilestone**](docs/Api/DefaultApi.md#createmilestone) | **POST** /api/v3/milestones | Create Milestone
*DefaultApi* | [**createMultipleStories**](docs/Api/DefaultApi.md#createmultiplestories) | **POST** /api/v3/stories/bulk | Create Multiple Stories
*DefaultApi* | [**createObjective**](docs/Api/DefaultApi.md#createobjective) | **POST** /api/v3/objectives | Create Objective
*DefaultApi* | [**createProject**](docs/Api/DefaultApi.md#createproject) | **POST** /api/v3/projects | Create Project
*DefaultApi* | [**createStory**](docs/Api/DefaultApi.md#createstory) | **POST** /api/v3/stories | Create Story
*DefaultApi* | [**createStoryComment**](docs/Api/DefaultApi.md#createstorycomment) | **POST** /api/v3/stories/{story-public-id}/comments | Create Story Comment
*DefaultApi* | [**createStoryFromTemplate**](docs/Api/DefaultApi.md#createstoryfromtemplate) | **POST** /api/v3/stories/from-template | Create Story From Template
*DefaultApi* | [**createStoryLink**](docs/Api/DefaultApi.md#createstorylink) | **POST** /api/v3/story-links | Create Story Link
*DefaultApi* | [**createStoryReaction**](docs/Api/DefaultApi.md#createstoryreaction) | **POST** /api/v3/stories/{story-public-id}/comments/{comment-public-id}/reactions | Create Story Reaction
*DefaultApi* | [**createTask**](docs/Api/DefaultApi.md#createtask) | **POST** /api/v3/stories/{story-public-id}/tasks | Create Task
*DefaultApi* | [**deleteCategory**](docs/Api/DefaultApi.md#deletecategory) | **DELETE** /api/v3/categories/{category-public-id} | Delete Category
*DefaultApi* | [**deleteCustomField**](docs/Api/DefaultApi.md#deletecustomfield) | **DELETE** /api/v3/custom-fields/{custom-field-public-id} | Delete Custom Field
*DefaultApi* | [**deleteEntityTemplate**](docs/Api/DefaultApi.md#deleteentitytemplate) | **DELETE** /api/v3/entity-templates/{entity-template-public-id} | Delete Entity Template
*DefaultApi* | [**deleteEpic**](docs/Api/DefaultApi.md#deleteepic) | **DELETE** /api/v3/epics/{epic-public-id} | Delete Epic
*DefaultApi* | [**deleteEpicComment**](docs/Api/DefaultApi.md#deleteepiccomment) | **DELETE** /api/v3/epics/{epic-public-id}/comments/{comment-public-id} | Delete Epic Comment
*DefaultApi* | [**deleteFile**](docs/Api/DefaultApi.md#deletefile) | **DELETE** /api/v3/files/{file-public-id} | Delete File
*DefaultApi* | [**deleteGenericIntegration**](docs/Api/DefaultApi.md#deletegenericintegration) | **DELETE** /api/v3/integrations/webhook/{integration-public-id} | Delete Generic Integration
*DefaultApi* | [**deleteIteration**](docs/Api/DefaultApi.md#deleteiteration) | **DELETE** /api/v3/iterations/{iteration-public-id} | Delete Iteration
*DefaultApi* | [**deleteLabel**](docs/Api/DefaultApi.md#deletelabel) | **DELETE** /api/v3/labels/{label-public-id} | Delete Label
*DefaultApi* | [**deleteLinkedFile**](docs/Api/DefaultApi.md#deletelinkedfile) | **DELETE** /api/v3/linked-files/{linked-file-public-id} | Delete Linked File
*DefaultApi* | [**deleteMilestone**](docs/Api/DefaultApi.md#deletemilestone) | **DELETE** /api/v3/milestones/{milestone-public-id} | Delete Milestone
*DefaultApi* | [**deleteMultipleStories**](docs/Api/DefaultApi.md#deletemultiplestories) | **DELETE** /api/v3/stories/bulk | Delete Multiple Stories
*DefaultApi* | [**deleteObjective**](docs/Api/DefaultApi.md#deleteobjective) | **DELETE** /api/v3/objectives/{objective-public-id} | Delete Objective
*DefaultApi* | [**deleteProject**](docs/Api/DefaultApi.md#deleteproject) | **DELETE** /api/v3/projects/{project-public-id} | Delete Project
*DefaultApi* | [**deleteStory**](docs/Api/DefaultApi.md#deletestory) | **DELETE** /api/v3/stories/{story-public-id} | Delete Story
*DefaultApi* | [**deleteStoryComment**](docs/Api/DefaultApi.md#deletestorycomment) | **DELETE** /api/v3/stories/{story-public-id}/comments/{comment-public-id} | Delete Story Comment
*DefaultApi* | [**deleteStoryLink**](docs/Api/DefaultApi.md#deletestorylink) | **DELETE** /api/v3/story-links/{story-link-public-id} | Delete Story Link
*DefaultApi* | [**deleteStoryReaction**](docs/Api/DefaultApi.md#deletestoryreaction) | **DELETE** /api/v3/stories/{story-public-id}/comments/{comment-public-id}/reactions | Delete Story Reaction
*DefaultApi* | [**deleteTask**](docs/Api/DefaultApi.md#deletetask) | **DELETE** /api/v3/stories/{story-public-id}/tasks/{task-public-id} | Delete Task
*DefaultApi* | [**disableIterations**](docs/Api/DefaultApi.md#disableiterations) | **PUT** /api/v3/iterations/disable | Disable Iterations
*DefaultApi* | [**disableStoryTemplates**](docs/Api/DefaultApi.md#disablestorytemplates) | **PUT** /api/v3/entity-templates/disable | Disable Story Templates
*DefaultApi* | [**enableIterations**](docs/Api/DefaultApi.md#enableiterations) | **PUT** /api/v3/iterations/enable | Enable Iterations
*DefaultApi* | [**enableStoryTemplates**](docs/Api/DefaultApi.md#enablestorytemplates) | **PUT** /api/v3/entity-templates/enable | Enable Story Templates
*DefaultApi* | [**getCategory**](docs/Api/DefaultApi.md#getcategory) | **GET** /api/v3/categories/{category-public-id} | Get Category
*DefaultApi* | [**getCurrentMemberInfo**](docs/Api/DefaultApi.md#getcurrentmemberinfo) | **GET** /api/v3/member | Get Current Member Info
*DefaultApi* | [**getCustomField**](docs/Api/DefaultApi.md#getcustomfield) | **GET** /api/v3/custom-fields/{custom-field-public-id} | Get Custom Field
*DefaultApi* | [**getEntityTemplate**](docs/Api/DefaultApi.md#getentitytemplate) | **GET** /api/v3/entity-templates/{entity-template-public-id} | Get Entity Template
*DefaultApi* | [**getEpic**](docs/Api/DefaultApi.md#getepic) | **GET** /api/v3/epics/{epic-public-id} | Get Epic
*DefaultApi* | [**getEpicComment**](docs/Api/DefaultApi.md#getepiccomment) | **GET** /api/v3/epics/{epic-public-id}/comments/{comment-public-id} | Get Epic Comment
*DefaultApi* | [**getEpicHealth**](docs/Api/DefaultApi.md#getepichealth) | **GET** /api/v3/epics/{epic-public-id}/health | Get Epic Health
*DefaultApi* | [**getEpicWorkflow**](docs/Api/DefaultApi.md#getepicworkflow) | **GET** /api/v3/epic-workflow | Get Epic Workflow
*DefaultApi* | [**getExternalLinkStories**](docs/Api/DefaultApi.md#getexternallinkstories) | **GET** /api/v3/external-link/stories | Get External Link Stories
*DefaultApi* | [**getFile**](docs/Api/DefaultApi.md#getfile) | **GET** /api/v3/files/{file-public-id} | Get File
*DefaultApi* | [**getGenericIntegration**](docs/Api/DefaultApi.md#getgenericintegration) | **GET** /api/v3/integrations/webhook/{integration-public-id} | Get Generic Integration
*DefaultApi* | [**getGroup**](docs/Api/DefaultApi.md#getgroup) | **GET** /api/v3/groups/{group-public-id} | Get Group
*DefaultApi* | [**getIteration**](docs/Api/DefaultApi.md#getiteration) | **GET** /api/v3/iterations/{iteration-public-id} | Get Iteration
*DefaultApi* | [**getKeyResult**](docs/Api/DefaultApi.md#getkeyresult) | **GET** /api/v3/key-results/{key-result-public-id} | Get Key Result
*DefaultApi* | [**getLabel**](docs/Api/DefaultApi.md#getlabel) | **GET** /api/v3/labels/{label-public-id} | Get Label
*DefaultApi* | [**getLinkedFile**](docs/Api/DefaultApi.md#getlinkedfile) | **GET** /api/v3/linked-files/{linked-file-public-id} | Get Linked File
*DefaultApi* | [**getMember**](docs/Api/DefaultApi.md#getmember) | **GET** /api/v3/members/{member-public-id} | Get Member
*DefaultApi* | [**getMilestone**](docs/Api/DefaultApi.md#getmilestone) | **GET** /api/v3/milestones/{milestone-public-id} | Get Milestone
*DefaultApi* | [**getObjective**](docs/Api/DefaultApi.md#getobjective) | **GET** /api/v3/objectives/{objective-public-id} | Get Objective
*DefaultApi* | [**getProject**](docs/Api/DefaultApi.md#getproject) | **GET** /api/v3/projects/{project-public-id} | Get Project
*DefaultApi* | [**getRepository**](docs/Api/DefaultApi.md#getrepository) | **GET** /api/v3/repositories/{repo-public-id} | Get Repository
*DefaultApi* | [**getStory**](docs/Api/DefaultApi.md#getstory) | **GET** /api/v3/stories/{story-public-id} | Get Story
*DefaultApi* | [**getStoryComment**](docs/Api/DefaultApi.md#getstorycomment) | **GET** /api/v3/stories/{story-public-id}/comments/{comment-public-id} | Get Story Comment
*DefaultApi* | [**getStoryLink**](docs/Api/DefaultApi.md#getstorylink) | **GET** /api/v3/story-links/{story-link-public-id} | Get Story Link
*DefaultApi* | [**getTask**](docs/Api/DefaultApi.md#gettask) | **GET** /api/v3/stories/{story-public-id}/tasks/{task-public-id} | Get Task
*DefaultApi* | [**getWorkflow**](docs/Api/DefaultApi.md#getworkflow) | **GET** /api/v3/workflows/{workflow-public-id} | Get Workflow
*DefaultApi* | [**listCategories**](docs/Api/DefaultApi.md#listcategories) | **GET** /api/v3/categories | List Categories
*DefaultApi* | [**listCategoryMilestones**](docs/Api/DefaultApi.md#listcategorymilestones) | **GET** /api/v3/categories/{category-public-id}/milestones | List Category Milestones
*DefaultApi* | [**listCategoryObjectives**](docs/Api/DefaultApi.md#listcategoryobjectives) | **GET** /api/v3/categories/{category-public-id}/objectives | List Category Objectives
*DefaultApi* | [**listCustomFields**](docs/Api/DefaultApi.md#listcustomfields) | **GET** /api/v3/custom-fields | List Custom Fields
*DefaultApi* | [**listDocs**](docs/Api/DefaultApi.md#listdocs) | **GET** /api/v3/documents | List Docs
*DefaultApi* | [**listEntityTemplates**](docs/Api/DefaultApi.md#listentitytemplates) | **GET** /api/v3/entity-templates | List Entity Templates
*DefaultApi* | [**listEpicComments**](docs/Api/DefaultApi.md#listepiccomments) | **GET** /api/v3/epics/{epic-public-id}/comments | List Epic Comments
*DefaultApi* | [**listEpicHealths**](docs/Api/DefaultApi.md#listepichealths) | **GET** /api/v3/epics/{epic-public-id}/health-history | List Epic Healths
*DefaultApi* | [**listEpicStories**](docs/Api/DefaultApi.md#listepicstories) | **GET** /api/v3/epics/{epic-public-id}/stories | List Epic Stories
*DefaultApi* | [**listEpics**](docs/Api/DefaultApi.md#listepics) | **GET** /api/v3/epics | List Epics
*DefaultApi* | [**listEpicsPaginated**](docs/Api/DefaultApi.md#listepicspaginated) | **GET** /api/v3/epics/paginated | List Epics Paginated
*DefaultApi* | [**listFiles**](docs/Api/DefaultApi.md#listfiles) | **GET** /api/v3/files | List Files
*DefaultApi* | [**listGroupStories**](docs/Api/DefaultApi.md#listgroupstories) | **GET** /api/v3/groups/{group-public-id}/stories | List Group Stories
*DefaultApi* | [**listGroups**](docs/Api/DefaultApi.md#listgroups) | **GET** /api/v3/groups | List Groups
*DefaultApi* | [**listIterationStories**](docs/Api/DefaultApi.md#listiterationstories) | **GET** /api/v3/iterations/{iteration-public-id}/stories | List Iteration Stories
*DefaultApi* | [**listIterations**](docs/Api/DefaultApi.md#listiterations) | **GET** /api/v3/iterations | List Iterations
*DefaultApi* | [**listLabelEpics**](docs/Api/DefaultApi.md#listlabelepics) | **GET** /api/v3/labels/{label-public-id}/epics | List Label Epics
*DefaultApi* | [**listLabelStories**](docs/Api/DefaultApi.md#listlabelstories) | **GET** /api/v3/labels/{label-public-id}/stories | List Label Stories
*DefaultApi* | [**listLabels**](docs/Api/DefaultApi.md#listlabels) | **GET** /api/v3/labels | List Labels
*DefaultApi* | [**listLinkedFiles**](docs/Api/DefaultApi.md#listlinkedfiles) | **GET** /api/v3/linked-files | List Linked Files
*DefaultApi* | [**listMembers**](docs/Api/DefaultApi.md#listmembers) | **GET** /api/v3/members | List Members
*DefaultApi* | [**listMilestoneEpics**](docs/Api/DefaultApi.md#listmilestoneepics) | **GET** /api/v3/milestones/{milestone-public-id}/epics | List Milestone Epics
*DefaultApi* | [**listMilestones**](docs/Api/DefaultApi.md#listmilestones) | **GET** /api/v3/milestones | List Milestones
*DefaultApi* | [**listObjectiveEpics**](docs/Api/DefaultApi.md#listobjectiveepics) | **GET** /api/v3/objectives/{objective-public-id}/epics | List Objective Epics
*DefaultApi* | [**listObjectives**](docs/Api/DefaultApi.md#listobjectives) | **GET** /api/v3/objectives | List Objectives
*DefaultApi* | [**listProjects**](docs/Api/DefaultApi.md#listprojects) | **GET** /api/v3/projects | List Projects
*DefaultApi* | [**listRepositories**](docs/Api/DefaultApi.md#listrepositories) | **GET** /api/v3/repositories | List Repositories
*DefaultApi* | [**listStories**](docs/Api/DefaultApi.md#liststories) | **GET** /api/v3/projects/{project-public-id}/stories | List Stories
*DefaultApi* | [**listStoryComment**](docs/Api/DefaultApi.md#liststorycomment) | **GET** /api/v3/stories/{story-public-id}/comments | List Story Comment
*DefaultApi* | [**listWorkflows**](docs/Api/DefaultApi.md#listworkflows) | **GET** /api/v3/workflows | List Workflows
*DefaultApi* | [**search**](docs/Api/DefaultApi.md#search) | **GET** /api/v3/search | Search
*DefaultApi* | [**searchEpics**](docs/Api/DefaultApi.md#searchepics) | **GET** /api/v3/search/epics | Search Epics
*DefaultApi* | [**searchIterations**](docs/Api/DefaultApi.md#searchiterations) | **GET** /api/v3/search/iterations | Search Iterations
*DefaultApi* | [**searchMilestones**](docs/Api/DefaultApi.md#searchmilestones) | **GET** /api/v3/search/milestones | Search Milestones
*DefaultApi* | [**searchObjectives**](docs/Api/DefaultApi.md#searchobjectives) | **GET** /api/v3/search/objectives | Search Objectives
*DefaultApi* | [**searchStories**](docs/Api/DefaultApi.md#searchstories) | **GET** /api/v3/search/stories | Search Stories
*DefaultApi* | [**searchStoriesOld**](docs/Api/DefaultApi.md#searchstoriesold) | **POST** /api/v3/stories/search | Search Stories (Old)
*DefaultApi* | [**storyHistory**](docs/Api/DefaultApi.md#storyhistory) | **GET** /api/v3/stories/{story-public-id}/history | Story History
*DefaultApi* | [**unlinkCommentThreadFromSlack**](docs/Api/DefaultApi.md#unlinkcommentthreadfromslack) | **POST** /api/v3/stories/{story-public-id}/comments/{comment-public-id}/unlink-from-slack | Unlink Comment thread from Slack
*DefaultApi* | [**unlinkProductboardFromEpic**](docs/Api/DefaultApi.md#unlinkproductboardfromepic) | **POST** /api/v3/epics/{epic-public-id}/unlink-productboard | Unlink Productboard from Epic
*DefaultApi* | [**updateCategory**](docs/Api/DefaultApi.md#updatecategory) | **PUT** /api/v3/categories/{category-public-id} | Update Category
*DefaultApi* | [**updateCustomField**](docs/Api/DefaultApi.md#updatecustomfield) | **PUT** /api/v3/custom-fields/{custom-field-public-id} | Update Custom Field
*DefaultApi* | [**updateEntityTemplate**](docs/Api/DefaultApi.md#updateentitytemplate) | **PUT** /api/v3/entity-templates/{entity-template-public-id} | Update Entity Template
*DefaultApi* | [**updateEpic**](docs/Api/DefaultApi.md#updateepic) | **PUT** /api/v3/epics/{epic-public-id} | Update Epic
*DefaultApi* | [**updateEpicComment**](docs/Api/DefaultApi.md#updateepiccomment) | **PUT** /api/v3/epics/{epic-public-id}/comments/{comment-public-id} | Update Epic Comment
*DefaultApi* | [**updateFile**](docs/Api/DefaultApi.md#updatefile) | **PUT** /api/v3/files/{file-public-id} | Update File
*DefaultApi* | [**updateGroup**](docs/Api/DefaultApi.md#updategroup) | **PUT** /api/v3/groups/{group-public-id} | Update Group
*DefaultApi* | [**updateHealth**](docs/Api/DefaultApi.md#updatehealth) | **PUT** /api/v3/health/{health-public-id} | Update Health
*DefaultApi* | [**updateIteration**](docs/Api/DefaultApi.md#updateiteration) | **PUT** /api/v3/iterations/{iteration-public-id} | Update Iteration
*DefaultApi* | [**updateKeyResult**](docs/Api/DefaultApi.md#updatekeyresult) | **PUT** /api/v3/key-results/{key-result-public-id} | Update Key Result
*DefaultApi* | [**updateLabel**](docs/Api/DefaultApi.md#updatelabel) | **PUT** /api/v3/labels/{label-public-id} | Update Label
*DefaultApi* | [**updateLinkedFile**](docs/Api/DefaultApi.md#updatelinkedfile) | **PUT** /api/v3/linked-files/{linked-file-public-id} | Update Linked File
*DefaultApi* | [**updateMilestone**](docs/Api/DefaultApi.md#updatemilestone) | **PUT** /api/v3/milestones/{milestone-public-id} | Update Milestone
*DefaultApi* | [**updateMultipleStories**](docs/Api/DefaultApi.md#updatemultiplestories) | **PUT** /api/v3/stories/bulk | Update Multiple Stories
*DefaultApi* | [**updateObjective**](docs/Api/DefaultApi.md#updateobjective) | **PUT** /api/v3/objectives/{objective-public-id} | Update Objective
*DefaultApi* | [**updateProject**](docs/Api/DefaultApi.md#updateproject) | **PUT** /api/v3/projects/{project-public-id} | Update Project
*DefaultApi* | [**updateStory**](docs/Api/DefaultApi.md#updatestory) | **PUT** /api/v3/stories/{story-public-id} | Update Story
*DefaultApi* | [**updateStoryComment**](docs/Api/DefaultApi.md#updatestorycomment) | **PUT** /api/v3/stories/{story-public-id}/comments/{comment-public-id} | Update Story Comment
*DefaultApi* | [**updateStoryLink**](docs/Api/DefaultApi.md#updatestorylink) | **PUT** /api/v3/story-links/{story-link-public-id} | Update Story Link
*DefaultApi* | [**updateTask**](docs/Api/DefaultApi.md#updatetask) | **PUT** /api/v3/stories/{story-public-id}/tasks/{task-public-id} | Update Task
*DefaultApi* | [**uploadFiles**](docs/Api/DefaultApi.md#uploadfiles) | **POST** /api/v3/files | Upload Files

## Models

- [BaseTaskParams](docs/Model/BaseTaskParams.md)
- [BasicWorkspaceInfo](docs/Model/BasicWorkspaceInfo.md)
- [Branch](docs/Model/Branch.md)
- [Category](docs/Model/Category.md)
- [Commit](docs/Model/Commit.md)
- [CreateCategory](docs/Model/CreateCategory.md)
- [CreateCategoryParams](docs/Model/CreateCategoryParams.md)
- [CreateCommentComment](docs/Model/CreateCommentComment.md)
- [CreateDoc](docs/Model/CreateDoc.md)
- [CreateEntityTemplate](docs/Model/CreateEntityTemplate.md)
- [CreateEpic](docs/Model/CreateEpic.md)
- [CreateEpicComment](docs/Model/CreateEpicComment.md)
- [CreateEpicHealth](docs/Model/CreateEpicHealth.md)
- [CreateGenericIntegration](docs/Model/CreateGenericIntegration.md)
- [CreateGroup](docs/Model/CreateGroup.md)
- [CreateIteration](docs/Model/CreateIteration.md)
- [CreateLabelParams](docs/Model/CreateLabelParams.md)
- [CreateLinkedFile](docs/Model/CreateLinkedFile.md)
- [CreateMilestone](docs/Model/CreateMilestone.md)
- [CreateObjective](docs/Model/CreateObjective.md)
- [CreateOrDeleteStoryReaction](docs/Model/CreateOrDeleteStoryReaction.md)
- [CreateProject](docs/Model/CreateProject.md)
- [CreateStories](docs/Model/CreateStories.md)
- [CreateStoryComment](docs/Model/CreateStoryComment.md)
- [CreateStoryCommentParams](docs/Model/CreateStoryCommentParams.md)
- [CreateStoryContents](docs/Model/CreateStoryContents.md)
- [CreateStoryFromTemplateParams](docs/Model/CreateStoryFromTemplateParams.md)
- [CreateStoryFromTemplateParamsSubTasksInner](docs/Model/CreateStoryFromTemplateParamsSubTasksInner.md)
- [CreateStoryLink](docs/Model/CreateStoryLink.md)
- [CreateStoryLinkParams](docs/Model/CreateStoryLinkParams.md)
- [CreateStoryParams](docs/Model/CreateStoryParams.md)
- [CreateSubTaskParams](docs/Model/CreateSubTaskParams.md)
- [CreateTask](docs/Model/CreateTask.md)
- [CreateTaskParams](docs/Model/CreateTaskParams.md)
- [CustomField](docs/Model/CustomField.md)
- [CustomFieldEnumValue](docs/Model/CustomFieldEnumValue.md)
- [CustomFieldValueParams](docs/Model/CustomFieldValueParams.md)
- [DataConflictError](docs/Model/DataConflictError.md)
- [DeleteStories](docs/Model/DeleteStories.md)
- [DisabledFeatureError](docs/Model/DisabledFeatureError.md)
- [DocSlim](docs/Model/DocSlim.md)
- [EntityTemplate](docs/Model/EntityTemplate.md)
- [Epic](docs/Model/Epic.md)
- [EpicAssociatedGroup](docs/Model/EpicAssociatedGroup.md)
- [EpicPaginatedResults](docs/Model/EpicPaginatedResults.md)
- [EpicSearchResult](docs/Model/EpicSearchResult.md)
- [EpicSearchResults](docs/Model/EpicSearchResults.md)
- [EpicSlim](docs/Model/EpicSlim.md)
- [EpicState](docs/Model/EpicState.md)
- [EpicStats](docs/Model/EpicStats.md)
- [EpicWorkflow](docs/Model/EpicWorkflow.md)
- [Group](docs/Model/Group.md)
- [Health](docs/Model/Health.md)
- [History](docs/Model/History.md)
- [HistoryActionBranchCreate](docs/Model/HistoryActionBranchCreate.md)
- [HistoryActionBranchMerge](docs/Model/HistoryActionBranchMerge.md)
- [HistoryActionBranchPush](docs/Model/HistoryActionBranchPush.md)
- [HistoryActionLabelCreate](docs/Model/HistoryActionLabelCreate.md)
- [HistoryActionLabelDelete](docs/Model/HistoryActionLabelDelete.md)
- [HistoryActionLabelUpdate](docs/Model/HistoryActionLabelUpdate.md)
- [HistoryActionProjectUpdate](docs/Model/HistoryActionProjectUpdate.md)
- [HistoryActionPullRequest](docs/Model/HistoryActionPullRequest.md)
- [HistoryActionStoryCommentCreate](docs/Model/HistoryActionStoryCommentCreate.md)
- [HistoryActionStoryCreate](docs/Model/HistoryActionStoryCreate.md)
- [HistoryActionStoryDelete](docs/Model/HistoryActionStoryDelete.md)
- [HistoryActionStoryLinkCreate](docs/Model/HistoryActionStoryLinkCreate.md)
- [HistoryActionStoryLinkDelete](docs/Model/HistoryActionStoryLinkDelete.md)
- [HistoryActionStoryLinkUpdate](docs/Model/HistoryActionStoryLinkUpdate.md)
- [HistoryActionStoryUpdate](docs/Model/HistoryActionStoryUpdate.md)
- [HistoryActionTaskCreate](docs/Model/HistoryActionTaskCreate.md)
- [HistoryActionTaskDelete](docs/Model/HistoryActionTaskDelete.md)
- [HistoryActionTaskUpdate](docs/Model/HistoryActionTaskUpdate.md)
- [HistoryActionWorkspace2BulkUpdate](docs/Model/HistoryActionWorkspace2BulkUpdate.md)
- [HistoryActionsInner](docs/Model/HistoryActionsInner.md)
- [HistoryChangesStory](docs/Model/HistoryChangesStory.md)
- [HistoryChangesStoryLink](docs/Model/HistoryChangesStoryLink.md)
- [HistoryChangesTask](docs/Model/HistoryChangesTask.md)
- [HistoryPrimaryId](docs/Model/HistoryPrimaryId.md)
- [HistoryReferenceBranch](docs/Model/HistoryReferenceBranch.md)
- [HistoryReferenceBranchId](docs/Model/HistoryReferenceBranchId.md)
- [HistoryReferenceCommit](docs/Model/HistoryReferenceCommit.md)
- [HistoryReferenceCustomFieldEnumValue](docs/Model/HistoryReferenceCustomFieldEnumValue.md)
- [HistoryReferenceEpic](docs/Model/HistoryReferenceEpic.md)
- [HistoryReferenceGeneral](docs/Model/HistoryReferenceGeneral.md)
- [HistoryReferenceGroup](docs/Model/HistoryReferenceGroup.md)
- [HistoryReferenceIteration](docs/Model/HistoryReferenceIteration.md)
- [HistoryReferenceLabel](docs/Model/HistoryReferenceLabel.md)
- [HistoryReferenceProject](docs/Model/HistoryReferenceProject.md)
- [HistoryReferenceStory](docs/Model/HistoryReferenceStory.md)
- [HistoryReferenceStoryTask](docs/Model/HistoryReferenceStoryTask.md)
- [HistoryReferenceWorkflowState](docs/Model/HistoryReferenceWorkflowState.md)
- [HistoryReferencesInner](docs/Model/HistoryReferencesInner.md)
- [Icon](docs/Model/Icon.md)
- [Identity](docs/Model/Identity.md)
- [Iteration](docs/Model/Iteration.md)
- [IterationAssociatedGroup](docs/Model/IterationAssociatedGroup.md)
- [IterationSearchResults](docs/Model/IterationSearchResults.md)
- [IterationSlim](docs/Model/IterationSlim.md)
- [IterationStats](docs/Model/IterationStats.md)
- [KeyResult](docs/Model/KeyResult.md)
- [KeyResultValue](docs/Model/KeyResultValue.md)
- [Label](docs/Model/Label.md)
- [LabelSlim](docs/Model/LabelSlim.md)
- [LabelStats](docs/Model/LabelStats.md)
- [LinkSubTaskParams](docs/Model/LinkSubTaskParams.md)
- [LinkedFile](docs/Model/LinkedFile.md)
- [MaxSearchResultsExceededError](docs/Model/MaxSearchResultsExceededError.md)
- [Member](docs/Model/Member.md)
- [MemberInfo](docs/Model/MemberInfo.md)
- [MemberInfoOrganization2](docs/Model/MemberInfoOrganization2.md)
- [Milestone](docs/Model/Milestone.md)
- [MilestoneStats](docs/Model/MilestoneStats.md)
- [Objective](docs/Model/Objective.md)
- [ObjectiveSearchResult](docs/Model/ObjectiveSearchResult.md)
- [ObjectiveSearchResults](docs/Model/ObjectiveSearchResults.md)
- [ObjectiveStats](docs/Model/ObjectiveStats.md)
- [Profile](docs/Model/Profile.md)
- [Project](docs/Model/Project.md)
- [ProjectStats](docs/Model/ProjectStats.md)
- [PullRequest](docs/Model/PullRequest.md)
- [PullRequestLabel](docs/Model/PullRequestLabel.md)
- [RemoveCustomFieldParams](docs/Model/RemoveCustomFieldParams.md)
- [RemoveLabelParams](docs/Model/RemoveLabelParams.md)
- [Repository](docs/Model/Repository.md)
- [SearchResults](docs/Model/SearchResults.md)
- [SearchStories](docs/Model/SearchStories.md)
- [Story](docs/Model/Story.md)
- [StoryComment](docs/Model/StoryComment.md)
- [StoryContents](docs/Model/StoryContents.md)
- [StoryContentsTask](docs/Model/StoryContentsTask.md)
- [StoryCustomField](docs/Model/StoryCustomField.md)
- [StoryHistoryChangeAddsRemovesInt](docs/Model/StoryHistoryChangeAddsRemovesInt.md)
- [StoryHistoryChangeAddsRemovesUuid](docs/Model/StoryHistoryChangeAddsRemovesUuid.md)
- [StoryHistoryChangeOldNewBool](docs/Model/StoryHistoryChangeOldNewBool.md)
- [StoryHistoryChangeOldNewInt](docs/Model/StoryHistoryChangeOldNewInt.md)
- [StoryHistoryChangeOldNewStr](docs/Model/StoryHistoryChangeOldNewStr.md)
- [StoryHistoryChangeOldNewUuid](docs/Model/StoryHistoryChangeOldNewUuid.md)
- [StoryLink](docs/Model/StoryLink.md)
- [StoryReaction](docs/Model/StoryReaction.md)
- [StorySearchResult](docs/Model/StorySearchResult.md)
- [StorySearchResults](docs/Model/StorySearchResults.md)
- [StorySlim](docs/Model/StorySlim.md)
- [StoryStats](docs/Model/StoryStats.md)
- [SyncedItem](docs/Model/SyncedItem.md)
- [Task](docs/Model/Task.md)
- [ThreadedComment](docs/Model/ThreadedComment.md)
- [TypedStoryLink](docs/Model/TypedStoryLink.md)
- [UnusableEntitlementError](docs/Model/UnusableEntitlementError.md)
- [UpdateCategory](docs/Model/UpdateCategory.md)
- [UpdateComment](docs/Model/UpdateComment.md)
- [UpdateCustomField](docs/Model/UpdateCustomField.md)
- [UpdateCustomFieldEnumValue](docs/Model/UpdateCustomFieldEnumValue.md)
- [UpdateEntityTemplate](docs/Model/UpdateEntityTemplate.md)
- [UpdateEpic](docs/Model/UpdateEpic.md)
- [UpdateFile](docs/Model/UpdateFile.md)
- [UpdateGroup](docs/Model/UpdateGroup.md)
- [UpdateHealth](docs/Model/UpdateHealth.md)
- [UpdateIteration](docs/Model/UpdateIteration.md)
- [UpdateKeyResult](docs/Model/UpdateKeyResult.md)
- [UpdateLabel](docs/Model/UpdateLabel.md)
- [UpdateLinkedFile](docs/Model/UpdateLinkedFile.md)
- [UpdateMilestone](docs/Model/UpdateMilestone.md)
- [UpdateObjective](docs/Model/UpdateObjective.md)
- [UpdateProject](docs/Model/UpdateProject.md)
- [UpdateStories](docs/Model/UpdateStories.md)
- [UpdateStory](docs/Model/UpdateStory.md)
- [UpdateStoryComment](docs/Model/UpdateStoryComment.md)
- [UpdateStoryContents](docs/Model/UpdateStoryContents.md)
- [UpdateStoryLink](docs/Model/UpdateStoryLink.md)
- [UpdateTask](docs/Model/UpdateTask.md)
- [UploadedFile](docs/Model/UploadedFile.md)
- [Workflow](docs/Model/Workflow.md)
- [WorkflowState](docs/Model/WorkflowState.md)

## Authorization

Authentication schemes defined for the API:
### api_token

- **Type**: API key
- **API key parameter name**: Shortcut-Token
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `3.0`
    - Package version: `0.4.0`
    - Generator version: `7.14.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
