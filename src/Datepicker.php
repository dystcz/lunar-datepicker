<?php

namespace Dystcz\LunarDatepicker;

use Illuminate\Support\Arr;
use Lunar\Base\FieldType;
use Lunar\Exceptions\FieldTypeException;

class Datepicker implements FieldType
{
    /**
     * @var string
     */
    protected string $value = '';

    /**
     * Create a new instance of Datepicker field type.
     *
     * @param string|null $value
     */
    public function __construct(string|null $value = '')
    {
        $this->setValue($value);
    }

    /**
     * Serialize the class.
     *
     * @return string
     */
    public function jsonSerialize(): mixed
    {
        return json_encode($this->value);
    }

    /**
     * Return the value of this field.
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * Set the value of this field.
     *
     * @param string $value
     *
     * @return void
     */
    public function setValue($value): void
    {
        $this->value = $value;
    }

    /**
     * {@inheritDoc}
     */
    public function getLabel(): string
    {
        return __('lunar-datepicker::datepicker.label');
    }

    /**
     * {@inheritDoc}
     */
    public function getSettingsView(): string
    {
        return 'lunar-datepicker::settings';
    }

    /**
     * {@inheritDoc}
     */
    public function getView(): string
    {
        return 'lunar-datepicker::view';
    }

    /**
     * {@inheritDoc}
     */
    public function getConfig(): array
    {
        return [];
    }
}
