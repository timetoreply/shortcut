# # Project

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**appUrl** | **string** | The Shortcut application url for the Project. |
**description** | **string** | The description of the Project. |
**archived** | **bool** | True/false boolean indicating whether the Project is in an Archived state. |
**entityType** | **string** | A string description of this resource. |
**daysToThermometer** | **int** | The number of days before the thermometer appears in the Story summary. |
**color** | **string** | The color associated with the Project in the Shortcut member interface. |
**workflowId** | **int** | The ID of the workflow the project belongs to. |
**name** | **string** | The name of the Project |
**globalId** | **string** | The Global ID of the Project. |
**startTime** | **\DateTime** | The date at which the Project was started. |
**updatedAt** | **\DateTime** | The time/date that the Project was last updated. |
**followerIds** | **string[]** | An array of UUIDs for any Members listed as Followers. |
**externalId** | **string** | This field can be set to another unique ID. In the case that the Project has been imported from another tool, the ID in the other tool can be indicated here. |
**id** | **int** | The unique ID of the Project. |
**showThermometer** | **bool** | Configuration to enable or disable thermometers in the Story summary. |
**teamId** | **int** | The ID of the team the project belongs to. |
**iterationLength** | **int** | The number of weeks per iteration in this Project. |
**abbreviation** | **string** | The Project abbreviation used in Story summaries. Should be kept to 3 characters at most. |
**stats** | [**\Timetoreply\Shortcut\Model\ProjectStats**](ProjectStats.md) |  |
**createdAt** | **\DateTime** | The time/date that the Project was created. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
