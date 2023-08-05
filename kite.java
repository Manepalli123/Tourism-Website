public class Main
{
  private static Node head;

  private static class Node
  {
    private int value;
    private Node next;

      Node (int value)
    {
      this.value = value;
    }
  }

  public void add (Node node)
  {

    if (head == null)
      {
	head = node;
      }
    else
      {
	Node temp = head;
	while (temp.next != null)
	  temp = temp.next;

	temp.next = node;
      }
  }

  public void print (Node printNode)
  {
    Node temp = printNode;
    while (temp != null)
      {
	System.out.format ("%d ", temp.value);
	temp = temp.next;
      }
    System.out.println ();
  }

  public static Node reverseList (Node node)
  {
    if (node == null || node.next == null)
      {
	return node;
      }

    Node remaining = reverseList (node.next);
    node.next.next = node;
    node.next = null;
    return remaining;
  }

  // This function will do sum of numbers represented by linked list
  public Node findSum (Node l1, Node l2)
  {
    int carry = 0;

    Node newHead = null;
    Node tempNodeForIteration = null;
    int sum = 0;

    int firstIter = 0;
    while (l1 != null || l2 != null)
      {
	firstIter++;
	sum = carry;
	if (l1 != null)
	  {
	    sum = sum + l1.value;
	    l1 = l1.next;
	  }

	if (l2 != null)
	  {
	    sum = sum + l2.value;
	    l2 = l2.next;
	  }

	carry = sum / 10;
	sum = sum % 10;
	// Check if it first node for the result
	if (firstIter == 1)
	  {
	    tempNodeForIteration = new Node (sum);
	    newHead = tempNodeForIteration;
	  }
	else
	  {
	    Node tempSumNode = new Node (sum);
	    tempNodeForIteration.next = tempSumNode;
	    tempNodeForIteration = tempNodeForIteration.next;
	  }

      }
    if (carry != 0)
      {
	Node tempNode = new Node (carry);
	tempNodeForIteration.next = tempNode;
      }
    return newHead;
  }

  public static void main (String[]args)
  {
    Main list = new Main ();
    // Creating a linked list
    Node head1 = new Node (8);
    list.add (head1);
    list.add (new Node (4));
    list.add (new Node (7));
    list.add (new Node (2));
    list.add (new Node (6));
    System.out.print ("Linked List 1:  ");
    list.print (head1);
    head = null;
    Node head2 = new Node (9);
    list.add (head2);
    list.add (new Node (0));
    list.add (new Node (3));
    list.add (new Node (6));

    System.out.print ("Linked list 2:  ");
    list.print (head2);
    // Reversing first linkedList
    head1 = reverseList (head1);

    //Reversing second linkedList
    head2 = reverseList (head2);


    Node result = list.findSum (head1, head2);

    result = reverseList (result);
    System.out.print ("Sum:  ");
    list.print (result);
  }
}