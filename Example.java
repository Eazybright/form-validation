public class Example {

    public static void main(String[] args) {
double Array[]={9.5,24.5,36.0,89.7,100.67};
System.out.println("The elements in the array are:");
for(int i=0;i<Array.length;i++){
    
   System.out.print(Array[i]+","+" ");
   
}
 System.out.println();
double sum=0;
for(int i=0;i<Array.length;i++){
    sum+=Array[i];
    
}
System.out.println("The total is "+sum);
double max=Array[0];
for(int i=1;i<Array.length;i++){
if(Array[i]>max){
    max=Array[i];
}
}
System.out.println("The maximum number is "+max);

    }
}

