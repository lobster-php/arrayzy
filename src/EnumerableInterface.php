<?php


namespace Bermuda\Enumerable;


use Bermuda\Arrayable;
use Bermuda\Countable\Countable;


/**
 * Interface EnumerableInterface
 * @package Bermuda\Enumerable
 */
interface EnumerableInterface extends Arrayable, Countable, \ArrayAccess, \IteratorAggregate
{
    /**
     * @param callable $callback
     * @return EnumerableInterface
     */
    public function map(callable $callback): EnumerableInterface ;

    /**
     * @return EnumerableInterface
     */
    public function collapse(): EnumerableInterface ;

    /**
     * Dump and die
     */
    public function dd(): void ;

    /**
     * @param Arrayable|array $first
     * @param Arrayable|array ... $other
     * @throws InvalidArhumentException
     * @return EnumerableInterface
     */
    public function diff($first, ... $other): EnumerableIneterface ;

    /**
     * @param Arrayable|array $values
     * @throws InvalidArgumentException
     * @return EnumerableInterface
     */
    public function combine($values): EnumerableInterface ;

    /**
     * @param int $limit
     * @return EnumerableInterface
     */
    public function take(int $limit): EnumerableInterface ;
    
    /**
     * @return bool
     */
    public function isEmpty(): bool;

    /**
     * @return EnumerableInterface
     */
    public function flip(): EnumerableInterface ;

    /**
     * @param $value
     * @return bool
     */
    public function contains($value, bool $strict = false): bool ;

    /**
     * @param $value
     * @param bool $strict
     * @return int|string|null
     */
    public function value($value, bool $strict = false);

    /**
     * @return static
     */
    public function flatten(): EnumerableInterface ;

    /**
     * @param callable $callback
     * @return EnumerableInterface
     */
    public function reject(callable $callback): EnumerableInterface ;

    /**
     * @param callable $callback
     * @return mixed|null
     */
    public function first(callable $callback);

    /**
     * @param callable $callback
     * @return mixed|null
     */
    public function last(callable $callback);

    /**
     * @param callable $callback
     * @return int|string|null
     */
    public function search(callable $callback);

    /**
     * @param callable $callback
     * @return EnumerableInterface
     */
    public function searchAll(callable $callback): EnumerableInterface ;
    
    /**
     * @param string|int|null $offset
     * @param $value
     * @return EnumerableInterface
     */
    public function set($offset, $value): EnumerableInterface ;

    /**
     * @param string|int $offset
     * @param null $default
     * @return mixed|null
     */
    public function get($offset, $default = null);

    /**
     * @param string|int $offset
     * @return bool
     */
    public function has($offset): bool;

    /**
     * @param $offset
     * @return EnumerableInterface
     */
    public function remove($offset): EnumerableInterface ;

    /**
     * @return int|float|null
     */
    public function sum();

    /**
     * @return float|int|null
     */
    public function median();

    /**
     * @param int $size
     * @param bool $preserveKeys
     * @return EnumerableInterface
     */
    public function chunk(int $size, bool $preserveKeys = false): EnumerableInterface ;

    /**
     * @param string $glue
     * @return string
     */
    public function implode(string $glue = '.'): string ;

    /**
     * @param int $sort_flags
     * @return EnumerableInterface
     */
    public function sort(int $sort_flags = SORT_REGULAR): EnumerableInterface;

    /**
     * @param int $sort_flags
     * @return EnumerableInterface
     */
    public function ksort(int $sort_flags = SORT_REGULAR): EnumerableInterface ;

    /**
     * @param int $sort_flags
     * @return EnumerableInterface
     */
    public function krsort(int $sort_flags = SORT_REGULAR): EnumerableInterface ;

    /**
     * @param callable $callback
     * @return EnumerableInterface
     */
    public function usort(callable $callback): EnumerableInterface ;

    /**
     * @param callable $callback
     * @return EnumerableInterface
     */
    public function uasort(callable $callback): EnumerableInterface ;

    /**
     * @param callable $callback
     * @return EnumerableInterface
     */
    public function uksort(callable $callback): EnumerableInterface ;

    /**
     * @param int $sort_flags
     * @return EnumerableInterface
     */
    public function rsort(int $sort_flags = SORT_REGULAR): EnumerableInterface ;

    /**
     * @return float|int|null
     */
    public function avg();

    /**
     * @return mixed
     */
    public function min();

    /**
     * @return mixed
     */
    public function max();

    /**
     * @param callable $callback
     * @return EnumerableInterface
     */
    public function filter(callable $callback): EnumerableInterface ;

    /**
     * @return mixed
     */
    public function shift();

    /**
     * @param $value
     * @param mixed ... $values
     * @return $this
     */
    public function unshift($value, ... $values): EnumerableInterface ;

    /**
     * @param $value
     * @param mixed ...$values
     * @return $this
     */
    public function push($value, ...$values): EnumerableInterface ;

    /**
     * @param int $sort_flags
     * @return EnumerableInterface
     */
    public function unique(int $sort_flags = SORT_STRING): EnumerableInterface ;

    /**
     * @return EnumerableInterface
     */
    public function values(): EnumerableInterface ;

    /**
     * @return mixed
     */
    public function pop();

    /**
     * Shuffles the array randomly
     * @return EnumerableInterface
     */
    public function shuffle(): EnumerableInterface ;

    /**
     * @param int $offset
     * @param int|null $len
     * @param bool $preserveKeys
     * @return EnumerableInterface
     */
    public function slice(int $offset, int $len = null, bool $preserveKeys = false): EnumerableInterface ;

    /**
     * @param bool $preserveKeys
     * @return EnumerableInterface
     */
    public function reverse($preserveKeys = false): EnumerableInterface ;

    /**
     * @param mixed ...$values
     * @return EnumerableInterface
     */
    public function add(... $values): EnumerableInterface ;

    /**
     * @return EnumerableInterface
     */
    public function clear(): EnumerableInterface ;

    /**
     * @param array|Arrayable $items
     * @return EnumerableInterface
     */
    public function replace($items): EnumerableInterface ;

    /**
     * @param string|int $offset
     * @return mixed
     */
    public function pull($offset);

    /**
     * @param string|int|array $offset
     * @param string|int ...$offsets
     * @return EnumerableInterface
     */
    public function only($offset, ... $offsets): EnumerableInterface ;

    /**
     * Return first collection element or null if collection is empty
     * @return mixed
     */
    public function start();

    /**
     * Return last collection element or null if collection is empty
     * @return mixed
     */
    public function end();

    /**
     * @return EnumerableInterface
     */
    public function keys(): EnumerableInterface ;

    /**
     * Return collection first key
     * @return string|int|null
     */
    public function firstKey();

    /**
     * Return collection first key
     * @return string|int|null
     */
    public function lastKey();

    /**
     * @param string|int|array $offset
     * @param string|int ...$offsets
     * @return EnumerableInterface
     */
    public function except($offset, ...$offsets): EnumerableInterface ;

    /**
     * @param int|string $offset
     * @param mixed $value
     * @return EnumerableInterface
     */
    public function offsetSet($offset, $value): EnumerableInterface ;

    /**
     * @param array|Arrayable $first
     * @param array|Arrayable ... $other
     * @return EnumerableInterface
     */
    public function merge($first, ... $other): EnumerableInterface ;

    /**
     * @param callable $callback
     * @return EnumerableInterface
     */
    public function each(callable $callback): EnumerableInterface ;

    /**
     * @param string|int $key
     * @param null|string|int $indexKey
     * @return EnumerableInterface
     */
    public function pluck($key, $indexKey = null): EnumerableInterface ;

    /**
     * @param callable $callback
     * @return $this
     */
    public function transform(callable $callback): EnumerableInterface ;

    /**
     * @param array|Arrayable $first
     * @param array|Arrayable ... $other
     * @return EnumerableInterface
     */
    public function intersect($first, ... $other): EnumerableInterface ;

    /**
     * @param callable $callback
     * @return mixed
     */
    public function callback(callable $callback);

    /**
     * @param int $num
     * @return EnumerableInterface
     */
    public function split(int $num): EnumerableInterface;

    /**
     * @param int $num
     * @return mixed|EnumerableInterface|null
     */
    public function rand(int $num = 1);

    /**
     * @param callable $callback
     * @param null $initial
     * @return mixed
     */
    public function reduce(callable $callback, $initial = null);
}
