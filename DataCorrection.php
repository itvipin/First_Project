<?php
class DataCorrection
{
    public $data = [];

    /** Correct Name for all values */
    private function correctData($allvalues)
    {
		$this->data = $allvalues;
        if (!empty($allvalues['firstname']))
        {
            $lowercase = $this->data['firstname'] = strtolower($allvalues['firstname']);
            $this->data['firstname'] = ucfirst($lowercase);
        }
        if (!empty($allvalues['lastname']))
        {
            $lowercase = $this->data['lastname'] = strtolower($allvalues['lastname']);
            $this->data['lastname'] = ucfirst($lowercase);
        }
        return $this->data;
    }

    function correct($validatedValues)
    {
        $this->correctData($validatedValues);
        return $this->data;;
    }

}

