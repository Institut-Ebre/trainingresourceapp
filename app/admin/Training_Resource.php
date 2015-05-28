<?php

Admin::model('\App\Training_Resource')->title('Recursos de formació')->with()->filters(function ()
{

})->columns(function ()
{
	Column::string('training_resource_name', 'Training_resource_name');
	Column::string('training_resource_short_name', 'Training_resource_short_name');
	Column::string('training_resource_description', 'Training_resource_description');
	Column::string('training_resource_thumbnail', 'Training_resource_thumbnail');
	Column::string('training_resource_external_url', 'Training_resource_external_url');
	Column::string('training_resource_parentResourceId', 'Training_resource_parentResourceId');
})->form(function ()
{
	FormItem::text('training_resource_name', 'Training Resource Name');
	FormItem::text('training_resource_short_name', 'Training Resource Short Name');
	FormItem::text('training_resource_description', 'Training Resource Description');
	FormItem::text('training_resource_thumbnail', 'Training Resource Thumbnail');
	FormItem::text('training_resource_external_url', 'Training Resource External Url');
	FormItem::text('training_resource_parentResourceId', 'Training Resource Parent Resource Id');
	FormItem::timestamp('training_resource_entryDate', 'Training Resource Entry Date');//->seconds(true);
	FormItem::timestamp('training_resource_last_update', 'Training Resource Last Update');//->seconds(true);
	FormItem::text('training_resource_creationUserId', 'Training Resource Creation User Id');
	FormItem::text('training_resource_lastupdateUserId', 'Training Resource Lastupdate User Id');
	FormItem::checkbox('training_resource_softDeleted', 'Training Resource Soft Deleted');
	FormItem::timestamp('training_resource_softDeletedDate', 'Training Resource Soft Deleted Date');//->seconds(true);
});