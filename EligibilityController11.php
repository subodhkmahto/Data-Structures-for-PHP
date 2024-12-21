<?php

class EligibilityController 
{
    public function resolveEligibility($jsonObject, $numberOfBestSubjects, $bestSubjectArray)
    {
        if (empty($bestSubjectArray) && !empty($numberOfBestSubjects) ) {
            // Sort subjects by obtained marks in descending order
            usort($jsonObject, function ($a, $b) {
                return $b['obtained_marks'] <=> $a['obtained_marks'];
            });

            // Select the top subjects based on the number of best subjects required
            $jsonObject = array_slice($jsonObject, 0, $numberOfBestSubjects);
        }

        // Calculate total marks for the best subjects
        [$totalMaxMarks, $totalObtainedMarks] = $this->calculateTotalMarks($jsonObject, $bestSubjectArray);

        // Calculate percentage
        $percentage = $this->calculatePercentage($totalObtainedMarks, $totalMaxMarks);

        // Print the results
        echo "Total Maximum Marks: $totalMaxMarks\n";
        echo "Total Obtained Marks: $totalObtainedMarks\n";
        echo "Total Percentage: $percentage%\n";
    }

    public function resolveEligibilityOne($jsonObject, $numberOfBestSubjects, $bestSubjectArray)
{
    // Ensure $bestSubjectArray is not empty and has the correct number of subjects
    if (!empty($bestSubjectArray) && count($bestSubjectArray) > $numberOfBestSubjects) {
        // Sort $bestSubjectArray based on obtained marks
     
        $filteredSubjects = array_filter($jsonObject, function ($subject) use ($bestSubjectArray) {
            return in_array($subject['name_of_subject'], $bestSubjectArray);
        });

        $filteredSubjects = $this->unsorHelper($filteredSubjects,$numberOfBestSubjects);

    } else {
        
        $filteredSubjects = $this->unsorHelper($jsonObject,$numberOfBestSubjects);

    }

    // Calculate total marks
    [$totalMaxMarks, $totalObtainedMarks] = $this->calculateTotalMarks($filteredSubjects, $bestSubjectArray);

    // Calculate percentage
    $percentage = $this->calculatePercentage($totalObtainedMarks, $totalMaxMarks);
    
        // Print the results
        echo "Total Maximum Marks: $totalMaxMarks\n";
        echo "Total Obtained Marks: $totalObtainedMarks\n";
        echo "Total Percentage: $percentage%\n";
}

private function unsorHelper($jsonObject,$numberOfBestSubjects)
{
    usort($jsonObject, function ($a, $b) {
                return $b['obtained_marks'] <=> $a['obtained_marks'];
            });
            // Select the top subjects based on the number of best subjects required
           return array_slice($jsonObject, 0, $numberOfBestSubjects);
}

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

//$bestSubjectArray = ['math', 'Physics', 'Chemistry', 'Social_Science']; 

$bestSubjectArray =null;

$numberOfBestSubjects = 3;

    if(count($jsonObject)>$numberOfBestSubjects){

        //$eligibilityController->resolveEligibility($jsonObject, $numberOfBestSubjects, $bestSubjectArray);
       $eligibilityController->resolveEligibilityOne($jsonObject, $numberOfBestSubjects, $bestSubjectArray);

    }else{

        print('To much number of best subjects');
        
    }

?>