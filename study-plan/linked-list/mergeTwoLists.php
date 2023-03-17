<?php

/**
 * @param ListNode $list1
 * @param ListNode $list2
 * @return ListNode
 */
function mergeTwoLists($list1, $list2)
{
    $array = array_push($list1, $list2);
    return sort($array);
}
