import os
from collections import namedtuple


def isnamedtupleinstance(t):
    b = t.__bases__
    if len(b) != 1 or b[0] != tuple:
        return False
    f = getattr(t, '_fields', None)
    if not isinstance(f, tuple):
        return False
    return all(type(n) == str for n in f)


def make_indent(indent=(-1, False), br=False):
    return (indent[0] + (0, 1)[br], br)


def indent_value(indent, value):
    space = ' ' * (indent[0] * 4)
    if indent[1]:
        return f'\n{space}{value}\n{space}'
    return value


def indent_values(indent, value):
    space = ' ' * (indent[0] * 4)
    if indent[1]:
        return f',\n{space}'.join(value)
    return ', '.join(value)


def php_print_value(indent, value):
    t = type(value)
    if value == None:
        return 'null'
    if t is dict:
        newIndent = make_indent(indent, len(value) > 10)
        return f'[{indent_value(newIndent, php_print_obj(newIndent, value))}]'
    elif t is list:
        newIndent = make_indent(indent, len(value) > 10)
        return f'[{indent_value(newIndent, php_print_array(newIndent, value))}]'
    elif t is str:
        return f'\'{value}\''
    elif t is int:
        return f'{value}'
    elif isnamedtupleinstance(t):
        newIndent = make_indent(indent, False)
        return f'[{indent_value(newIndent, php_print_namedtuple(newIndent, value))}]'
    print(f'unknown type: {type(value)}')


def php_print_array(indent, arr):
    ret = []
    for value in arr:
        ret.append(php_print_value(indent, value))
    return indent_values(indent, ret)


def php_print_obj(indent, obj):
    ret = []
    for key, value in obj.items():
        if key == 'id':
            continue
        ret.append(
            f'{php_print_value(indent, key)} => {php_print_value(indent, value)}')
    return indent_values(indent, ret)


def php_print_namedtuple(indent, obj):
    ret = []
    i = 0
    for key in getattr(type(obj), '_fields', None):
        i += 1
        if key == 'id':
            continue
        ret.append(
            f'{php_print_value(indent, key)} => {php_print_value(indent, obj[i-1])}')
    return indent_values(indent, ret)


def php_print(variable_name, obj):
    return f'${variable_name} = {php_print_value(make_indent(), obj)};\n'
