using System; 
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace test02
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();

            int[] num1 = { 1, 2, 3, 4, 5 };
            int[] num2 = new int[5];

            num2[0] = 1;
            num2[1] = 2;
            num2[2] = 3;
            num2[3] = 4;
            num2[4] = 5;

            string[] mydata = { "data1", "data2", "data3" };
            // mydata.Length : 3

        }

        private void button1_Click(object sender, EventArgs e)
        {
            // 버튼1이 눌러졌다면 ~
            // label1에 textbox4의 내용을 대입하겠음
            // C#에서 기본 문자형 : int, double, string
            // object : 배열, 구조체, 클래스 ...
            label1.Text = textBox1.Text;
        }

        private void button2_Click(object sender, EventArgs e)
        {
            /*int num = 10;
            num.ToString();*/

            // numericupdown1의 값을 label1에 대입함
            label1.Text = numericUpDown1.Value.ToString();
        }

        private void button3_Click(object sender, EventArgs e)
        {
            string data = "123";
            int num = int.Parse(data);

            numericUpDown1.Value = int.Parse(textBox2.Text);
        }

        private void button4_Click(object sender, EventArgs e)
        {
            int num1 = int.Parse(textBox3.Text);
            int num2 = int.Parse(textBox4.Text);

            label2.Text = (num1 + num2).ToString();
        }

        private void button7_Click(object sender, EventArgs e)
        {
            int num1 = int.Parse(textBox3.Text);
            int num2 = int.Parse(textBox4.Text);

            label2.Text = (num1 - num2).ToString();
        }

        private void button5_Click(object sender, EventArgs e)
        {
            int num1 = int.Parse(textBox3.Text);
            int num2 = int.Parse(textBox4.Text);

            label2.Text = (num1 * num2).ToString();
        }

        private void button6_Click(object sender, EventArgs e)
        {
            int num1 = int.Parse(textBox3.Text);
            int num2 = int.Parse(textBox4.Text);

            label2.Text = ((double)num1 / num2).ToString();
        }

        private void textBox3_TextChanged(object sender, EventArgs e)
        {

        }

        private void label2_Click(object sender, EventArgs e)
        {

        }

        private void tabPage1_Click(object sender, EventArgs e)
        {

        }

        private void textBox6_TextChanged(object sender, EventArgs e)
        {

        }

        private void button8_Click(object sender, EventArgs e)
        {
            label3.Text = textBox5.Text + textBox6.Text;
        }

        private void button9_Click(object sender, EventArgs e)
        {
            string[] input = textBox7.Text.Split(',');
            int Total = 0;
            for(int i = 0; i < input.Length; i++)
            {
                Total = int.Parse(input[i]);
            }
            label4.Text = Total.ToString();
        }
    }
}
