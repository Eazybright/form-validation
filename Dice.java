
package dice;
import java.util.Scanner;
import java.util.Random;
public class Dice {

    public static void main(String[] args) {
        //creats Scanner class
       Scanner input=new Scanner(System.in);
       //create random class
       Random randomValue=new Random();
       System.out.println("A PROGRAM TO ROLL A SIX-SIDED DICE");
       System.out.println();
       //accepting user input
       System.out.println("Choose a number range from 0-6 to indicate where the counting start from:");
       int number=input.nextInt();
       System.out.println("how many times do you want the dice to roll?");
       int roll=input.nextInt();
       System.out.println("The result will be displayed below:");
       //loop roll times
       for(int i=number;i<=roll;i++){
           //pick random integer
           int face=number+randomValue.nextInt(6);
           //output result
           System.out.printf("%3d ",face);
           //if i is divisible by 5, start a new line
           if (i%5==0)
               System.out.println();
               
               }
    
}
}