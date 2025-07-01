# # Member

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**role** | **string** | The Member&#39;s role in the Workspace. |
**entityType** | **string** | A string description of this resource. |
**disabled** | **bool** | True/false boolean indicating whether the Member has been disabled within the Workspace. |
**globalId** | **string** |  |
**state** | **string** | The user state, one of partial, full, disabled, or imported.  A partial user is disabled, has no means to log in, and is not an import user.  A full user is enabled and has a means to log in.  A disabled user is disabled and has a means to log in.  An import user is disabled, has no means to log in, and is marked as an import user. |
**updatedAt** | **\DateTime** | The time/date the Member was last updated. |
**createdWithoutInvite** | **bool** | Whether this member was created as a placeholder entity. |
**groupIds** | **string[]** | The Member&#39;s group ids |
**id** | **string** | The Member&#39;s ID in Shortcut. |
**profile** | [**\Timetoreply\Shortcut\Model\Profile**](Profile.md) |  |
**createdAt** | **\DateTime** | The time/date the Member was created. |
**replacedBy** | **string** | The id of the member that replaces this one when merged. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
