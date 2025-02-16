#include <iostream>
#include <typeinfo>

int main()
{
    auto a = 'c';
    std::cout << typeid(a).name();
}