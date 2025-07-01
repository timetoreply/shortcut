# # PullRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**entityType** | **string** | A string description of this resource. |
**closed** | **bool** | True/False boolean indicating whether the VCS pull request has been closed. |
**merged** | **bool** | True/False boolean indicating whether the VCS pull request has been merged. |
**numAdded** | **int** | Number of lines added in the pull request, according to VCS. |
**branchId** | **int** | The ID of the branch for the particular pull request. |
**overlappingStories** | **int[]** | An array of Story ids that have Pull Requests that change at least one of the same lines this Pull Request changes. | [optional]
**number** | **int** | The pull request&#39;s unique number ID in VCS. |
**branchName** | **string** | The name of the branch for the particular pull request. |
**targetBranchName** | **string** | The name of the target branch for the particular pull request. |
**numCommits** | **int** | The number of commits on the pull request. |
**title** | **string** | The title of the pull request. |
**updatedAt** | **\DateTime** | The time/date the pull request was created. |
**hasOverlappingStories** | **bool** | Boolean indicating that the Pull Request has Stories that have Pull Requests that change at least one of the same lines this Pull Request changes. |
**draft** | **bool** | True/False boolean indicating whether the VCS pull request is in the draft state. |
**id** | **int** | The unique ID associated with the pull request in Shortcut. |
**vcsLabels** | [**\Timetoreply\Shortcut\Model\PullRequestLabel[]**](PullRequestLabel.md) | An array of PullRequestLabels attached to the PullRequest. | [optional]
**url** | **string** | The URL for the pull request. |
**numRemoved** | **int** | Number of lines removed in the pull request, according to VCS. |
**reviewStatus** | **string** | The status of the review for the pull request. | [optional]
**numModified** | **int** | Number of lines modified in the pull request, according to VCS. |
**buildStatus** | **string** | The status of the Continuous Integration workflow for the pull request. | [optional]
**targetBranchId** | **int** | The ID of the target branch for the particular pull request. |
**repositoryId** | **int** | The ID of the repository for the particular pull request. |
**createdAt** | **\DateTime** | The time/date the pull request was created. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
