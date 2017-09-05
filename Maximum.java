/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author PC
 */
import java.util.Scanner;
public class Maximum {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        Scanner input=new Scanner(System.in);
        int p,q,r,m,t,x;
        System.out.print("enter first number: ");
        p=input.nextInt();
    System.out.print("enter second number: ");
        q=input.nextInt();
    System.out.print("enter third number: ");
        r=input.nextInt();
        System.out.print("enter fourth number: ");
        m=input.nextInt();
        System.out.print("enter fifth number: ");
        t=input.nextInt();
        if(p>q){
            x=p;
        }
        else{
            x=q;
        }
        if (x<r){
            x=r;
        }
        if(x<m){
            x=m;
        }
        if(x<t){
            x=t;
            
        }
                    
        System.out.println("The greatest number is "+x);
        }
    }
    

