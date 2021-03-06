<?php

class boilerplate extends Model
{

    /**
     * Discard cached data older than this date.
     * This is only necessary if the data structure has changed.
     * @var string YYYY-MM-DD
     */
    public static $mod_time = '';

    /**
     * Array of possible errors for this model.
     * = array(
     *     'my_error_code' => array(
     *          'message' => 'The value for this field is invalid',
     *          'fields' => array('my_field') // optional
     *          'type' => 'invalid' // optional
     *          'arbitrary_anything' => '' // optional
     *      )
     * );
     * @var array
     */
    protected static $possible_errors = array(

    );

    /**
     * Required Fields
     * This model will not save if these fields are blank. The Field description is used
     * to generate the error message. i.e. "'Field description' is required."
     * = array(
     *      'name' => 'Name'
     *      'birth_date' => 'Birthdate'
     * );
     * @var array
     */
    public $_required_fields = array(

    );

    /**
     * Read-only Properties
     * Specifies which data elements in the aql are read-only
     * = array(
     *     'tables' => array('table_name'),
     *     'fields' => array('field1', 'field2') // field aliases
     *     'objects' => array('model_name') // table { [model_name] }
     *     'subs' => array('subquery_primary_table') // table { sub { } }
     * );
     * @var array
     */
    public $_ignore = array(

    );

    /**
     * Foreign Keys
     * Suppose this is an 'album' model.
     * Album has a foreign key 'artist_id'.  The artist model has the following aql:
     *      artist {
     *          [album]s
     *      }
     *
     * This means a list of albums is cached in the artist model.
     * So, the album model "belongs to" the artist model:
     *      $_belongs_to = array(
     *          'artist' => array('artist_id')
     *      );
     *
     * The cached albums, $artist->album[], will be refreshed when $album->artist_id is
     * modified.
     * @var array
     */
    public $_belongs_to = array(

    );

    /**
     * Construct
     * Runs when this object is instantiated. Set calculated properties here.
     * Do not override __construct().
     * This also runs after Model::reload()
     */
    public function construct()
    {

    }

    /**
     * Before Checking Required Fields
     * Runs before checking the required fields and before validation.
     * $this->addError('my-error-code') -- validation will not run and the transaction
     *      will fail and will roll back.
     * static::error('my-error-code') -- immediately throws ValidationException
     */
    public function beforeCheckRequiredFields()
    {

    }

    /**
     * Specific Field Validation
     * Runs if $this->my_field is set and is not null.
     * $this->addError('my-error-code') -- validation will continue to run and validate
     *      the remaining fields to determine all errors, but the transaction will fail
     *      and roll back.
     * static::error('my-error-code') -- immediately throws ValidationException
     * @param mixed $value the current value of $this->my_field
     */
    public function validate_my_field($value)
    {

    }

    /**
     * General Validation
     * Only runs if all individual fields are valid so far.
     * $this->addError('my-error-code') -- validation will continue to run and validate
     *      the remaining fields to determine all errors, but the transaction will fail
     *      and roll back.
     * static::error('my-error-code') -- immediately throws ValidationException
     */
    public function validate()
    {

    }

    /**
     * Runs before inserting a new record if there are no errors after all validation.
     * static::error() or $this->addError() will abort and roll back.
     */
    public function beforeInsert()
    {

    }

    /**
     * Runs before updating a record if there are no errors after all validation.
     * static::error() or $this->addError() will abort and roll back.
     */
    public function beforeUpdate()
    {

    }

    /**
     * Runs before deleting a record.
     * static::error() or $this->addError() will abort and roll back.
     */
    public function beforeDelete()
    {

    }

    /**
     * Insert was a success, we now have our new id: $this->getID()
     * But we are still in the transaction, so $this->addError() will abort and roll back.
     */
    public function afterInsert()
    {

    }

    /**
     * Update was a success.
     * But we are still in the transaction, so $this->addError() will abort and roll back.
     */
    public function afterUpdate()
    {

    }

    /**
     * Runs after deleting a record.
     * But we are still in the transaction, so $this->addError() will abort and roll back.
     */
    public function afterDelete()
    {

    }

}
