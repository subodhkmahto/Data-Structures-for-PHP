<?php

class EligibilityController
{
   
    public function resolveEligibility($jsonObject, $numberOfBestSubjects, $bestSubjectArray)
    {
        // Validate inputs
        if (empty($jsonObject) || $numberOfBestSubjects <= 0) {
            echo "Invalid input data.\n";
            return;
        }

        if (empty($bestSubjectArray)) {
            // Handle case where no specific best subject array is provided
            $selectedSubjects = $this->selectTopSubjects($jsonObject, $numberOfBestSubjects);
        } else {
            // Handle case where a specific best subject array is provided
            $selectedSubjects = $this->filterAndSelectTopSubjects($jsonObject, $bestSubjectArray, $numberOfBestSubjects);
        }

        // Calculate and display the results
        $this->displayEligibilityResults($selectedSubjects, $bestSubjectArray);
    }

    /**
     * Filters and selects the top subjects based on a predefined subject array.
     */
    private function filterAndSelectTopSubjects($jsonObject, $bestSubjectArray, $numberOfBestSubjects)
    {
        $filteredSubjects = array_filter($jsonObject, function ($subject) use ($bestSubjectArray) {
            return in_array($subject['name_of_subject'], $bestSubjectArray);
        });

        return $this->selectTopSubjects($filteredSubjects, $numberOfBestSubjects);
    }

    /**
     * Sorts and selects the top subjects by obtained marks.
     */
    private function selectTopSubjects($subjects, $numberOfBestSubjects)
    {
        usort($subjects, function ($a, $b) {
            return $b['obtained_marks'] <=> $a['obtained_marks'];
        });

        return array_slice($subjects, 0, $numberOfBestSubjects);
    }

    /**
     * Calculates total marks and percentage, and displays the results.
     */
    private function displayEligibilityResults($subjects, $bestSubjectArray)
    {
        [$totalMaxMarks, $totalObtainedMarks] = $this->calculateTotalMarks($subjects, $bestSubjectArray);
        $percentage = $this->calculatePercentage($totalObtainedMarks, $totalMaxMarks);

        echo "Total Maximum Marks: $totalMaxMarks\n";
        echo "Total Obtained Marks: $totalObtainedMarks\n";
        echo "Total Percentage: $percentage%\n";
    }

    /**
     * Calculates the total maximum and obtained marks for the selected subjects.
     */
    private function calculateTotalMarks($subjects, $bestSubjectArray)
    {
        $totalObtainedMarks = 0;
        $totalMaxMarks = 0;

        foreach ($subjects as $subject) {
            if (empty($bestSubjectArray) || in_array($subject['name_of_subject'], $bestSubjectArray)) {
                $totalObtainedMarks += (int)$subject['obtained_marks'];
                $totalMaxMarks += (int)$subject['max_marks'];
            }
        }

        return [$totalMaxMarks, $totalObtainedMarks];
    }

    /**
     * Calculates the percentage of obtained marks.
     */
    private function calculatePercentage($obtainedMarks, $maxMarks)
    {
        return $maxMarks > 0 ? round(($obtainedMarks * 100) / $maxMarks, 2) : 0;
    }
}

// Instantiating the class and invoking the method
$eligibilityController = new EligibilityController();

// Input data
$jsonObject = [
    ['label' => '10th', 'name_of_subject' => 'math', 'max_marks' => '100', 'obtained_marks' => '98'],
    ['label' => '10th', 'name_of_subject' => 'Physics', 'max_marks' => '100', 'obtained_marks' => '78'],
    ['label' => '10th', 'name_of_subject' => 'Chemistry', 'max_marks' => '100', 'obtained_marks' => '68'],
    ['label' => '10th', 'name_of_subject' => 'English', 'max_marks' => '100', 'obtained_marks' => '52'],
    ['label' => '10th', 'name_of_subject' => 'Hindi', 'max_marks' => '100', 'obtained_marks' => '65'],
    ['label' => '10th', 'name_of_subject' => 'Social_Science', 'max_marks' => '100', 'obtained_marks' => '80'],
];

// Input parameters

$bestSubjectArray = ['math', 'Physics', 'Chemistry', 'Social_Science'];

//$bestSubjectArray = null;
$numberOfBestSubjects = 3;

if (count($jsonObject) > $numberOfBestSubjects) {
    $eligibilityController->resolveEligibility($jsonObject, $numberOfBestSubjects, $bestSubjectArray);
} else {
    echo "Too few subjects for the number of best subjects specified.\n";
}

?>
