# **Digital** Vision Capsule
한동대학교는 10년 주기로 구성원들의 비전을 담은 비전캡슐을 개봉하고, 묻는 행사를 진행합니다.
하지만 해당 주기의 재학중이지 않으면 행사에 참여할 수 없다는 것과 행사가 지난 이후에 과거의 한동구성원들의 비전의 내용을 살펴볼 기회가 없다는 아쉬운 점이 있습니다.

이를 해결하기 위해 라즈베리파이 서버와 php를 활용하여 비전캡슐의 데이터베이스를 구축하고 Web interface를 통해 과거의 비전캡슐을 원하는 때에 볼 수 있도록 하고 원격으로도 비전캡슐을 작성할 수 있도록 하였습니다.

# 서비스 세팅
### 서비스 구현을 위한 기본 세팅입니다.
1. install Apache2 
	>  \'$ sudo apt-get install apache2 –y\'

2. Start the Apache server
	>  \'$ sudo service apache2 restart\'

3. Installing MySQL Server (Database management system)
	>  \'$ sudo apt-get install mariadb-server php-mysql -y\'

4. Create a new user to login to mysql
	>  \'$ sudo mysql\'
	> create user admin@localhost identified by 'your_password';
	> grant all privileges on *.* to admin@localhost;
	> FLUSH PRIVILEGES;
	> exit;

5. Install Phpmyadmin
	> \'$ sudo apt-get install phpMyAdmin -y\'

6. JQuery
	> http://jquery.com/download/

# 서비스 사용법
## 관리자(데이터 베이스)
1. phpMyadmin 에서 "visionDatabase"라는 이름의 DataBase를 만듭니다.
2. 해당 데이터베이스 안에 "tb_vision2020"이라는 테이블을 생성합니다.
3. 아래와 같은 테이블 구조 및 타입을 추가합니다. 
	> num(int(11)) / name(varchar(100)) / student(varchar(8)) / title(varchar(100)) / vision(varchar(1000))    
4. 현재 repository를 /var/www/html/ directory에 git clone합니다.

## 사용자(등록) 
1. Vision Capsule Web 주소로 접속한다. 
2. 왼쪽 상단의 Make Vision Capsule 이나 오른쪽 하단으 < 버튼을 누른다.
3. Vision Capsule을 작성한다.
4. Send it 버튼을 누른다.

## 사용자(탐색)
1. 왼쪽 하단의 지난 년도들의 비젼캡슐버튼을 누른다.
2. 과거 비전캡슐을 탐색한다.
  
# 해당 서비스의 장점
* 비전이라는 카테고리의 데이터베이스를 구축
* 비전캡슐 행사의 물리적인 한계로 참석하지 못했던 구성원들이 웹을 통해 참석가능 

# 해당 서비스의 개선할 점
1. UX/UI의 개선
2. 단순 비전 등록 및 관람을 넘어 비전과 관련된 추가적인 컨텐츠가 필요해보임
3. 캡슐 개봉일에 맞추어 웹 자동생성되는 기능 추가적으로 필요

# 문의사항
* 21500474@handong.edu

# 관련 영상 링크
* www.youtube.com

