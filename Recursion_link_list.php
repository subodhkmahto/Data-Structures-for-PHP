<?php

class ListNode
{
    public $data;
    public $next;

    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }
}


class ListNode1{
    public $data;
    public $next;
    
    public function _construct($data){
        $this->data=$data;
        $this->next=null;
    }
}

class Solutions{

   public function reverseList_($head){
              if($head==null || $head->next==null){
                return $head;
              }
              $res=$this->reverseList_($head->next);
              $head->next->next=$head;
              $head->next=null;
              return $res;
      }

      public function printList_($head){
         if($head==null){
            return ;
         }
         echo $head->date .' ,';
        $this->printList_($head->next);
      }
}


 $solutions=new Solutions();

 $node=new ListNode1(2);
 $node->next=new ListNode1(3);
 $node->next->next=new ListNode1(4);
 $node->next->next->next=new ListNode1(5);

 $solutions->printList_($node);


class Solution
{

    /**
     * Reverse a linked list recursively.
     * @param ListNode|null $head
     * @return ListNode|null
     */
    public function reverseList($head)
    {
        // Base case: if head is null or only one node, return it
        if ($head === null || $head->next === null) {
            return $head;
        }

        $this->printList($head);
        // Recursively reverse the rest of the list
        $rest = $this->reverseList($head->next);
        // var_dump($rest);
        // Put the first element at the end
        print('---------------->');
        $this->printList($head);
        // print($rest->data); 
        // print($head->data);
        // print($head->next->next);
        $head->next->next = $head;
  
        $head->next = null;
        print('----=======----->');
        $this->printList($head);
        // Return the reversed list
        return $rest;
    }

    /**
     * Print the linked list from the given node.
     * @param ListNode|null $node
     */
    public function printList($node)
    {
        while ($node !== null) {
            echo $node->data . " ";
            $node = $node->next;
        }
        echo PHP_EOL;
    }
}

// Driver code
$solution = new Solution();

// Create a hard-coded linked list: 1 -> 2 -> 3 -> 4 -> 5
$head = new ListNode(1);
$head->next = new ListNode(2);
$head->next->next = new ListNode(3);
$head->next->next->next = new ListNode(4);
$head->next->next->next->next = new ListNode(5);

echo "Given Linked List: ";
$solution->printList($head);

// Function call to reverse the linked list
$head = $solution->reverseList($head);

echo "Reversed Linked List: ";
$solution->printList($head);
